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

/* eventos/index.html.twig */
class __TwigTemplate_39b6fff8320c6afd232454870aa3d776ea2d011c6773dcc388ec59431d2beebf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eventos/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "eventos/index.html.twig", 1);
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
        echo "<div class=\"container\">
\t<nav class=\"my-3\">
\t\t<div class=\"nav nav-tabs nav-justified header-eventos row m-0\" id=\"nav-tab\" role=\"tablist\">

\t\t\t<a class=\"nav-item d-flex align-items-center justify-content-center active\" id=\"nav-auto-tab\"
\t\t\t\tdata-toggle=\"tab\" href=\"#nav-auto\" role=\"tab\" aria-controls=\"nav-auto\"
\t\t\t\taria-selected=\"true\">Autonomica</a>

\t\t\t<a class=\"nav-item d-flex align-items-center justify-content-center\" id=\"nav-val-tab\" data-toggle=\"tab\"
\t\t\t\thref=\"#nav-val\" role=\"tab\" aria-controls=\"nav-val\" aria-selected=\"false\">Valencia</a>

\t\t</div>
\t</nav>
\t<div class=\"tab-content\" id=\"nav-tabContent\">
\t\t<div class=\"tab-pane fade show active\" id=\"nav-auto\" role=\"tabpanel\" aria-labelledby=\"nav-auto-tab\">
\t\t\t";
        // line 22
        $context["num"] = 0;
        // line 23
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataAuto"]) || array_key_exists("dataAuto", $context) ? $context["dataAuto"] : (function () { throw new RuntimeError('Variable "dataAuto" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eventAuto"]) {
            // line 24
            echo "
\t\t\t<div class=\"card eventos my-2\">

\t\t\t\t<div class=\"card-header text-left d-flex row m-0\" data-toggle=\"collapse\" href=\"#A";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" role=\"button\"
\t\t\t\t\taria-expanded=\"false\" aria-controls=\"A";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\">

\t\t\t\t\t<div class=\"float-left col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getFechas", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-md-right text-left ml-auto col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-trophy\"></i>
\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getCompeticion", [], "any", false, false, false, 37), "html", null, true);
            echo "
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"card-body collapse multi-collapse\" id=\"A";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\">

\t\t\t\t\t<div class=\"row text-left\">

\t\t\t\t\t\t";
            // line 46
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getCategoria", [], "any", false, false, false, 46)), "")) {
                // line 47
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCategoria
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getCategoria", [], "any", false, false, false, 52), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 55
            echo "
\t\t\t\t\t\t";
            // line 56
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getLocalidad", [], "any", false, false, false, 56)), "")) {
                // line 57
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tLocalidad
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getLocalidad", [], "any", false, false, false, 62), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 65
            echo "

\t\t\t\t\t\t";
            // line 67
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getCentro", [], "any", false, false, false, 67)), "")) {
                // line 68
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCentro
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getCentro", [], "any", false, false, false, 73), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 76
            echo "

\t\t\t\t\t\t";
            // line 78
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getHorario", [], "any", false, false, false, 78)), "")) {
                // line 79
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">

\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tHorario
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventAuto"], "getHorario", [], "any", false, false, false, 85), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 88
            echo "

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
            // line 96
            $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 96, $this->source); })()) + 1);
            // line 97
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventAuto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t</div>

\t\t<div class=\"tab-pane fade\" id=\"nav-val\" role=\"tabpanel\" aria-labelledby=\"nav-val-tab\">
\t\t\t";
        // line 102
        $context["numVal"] = 0;
        // line 103
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataVal"]) || array_key_exists("dataVal", $context) ? $context["dataVal"] : (function () { throw new RuntimeError('Variable "dataVal" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eventVal"]) {
            // line 104
            echo "
\t\t\t<div class=\"card eventos my-2\">
\t\t\t\t<div class=\"card-header text-left d-flex row m-0\" data-toggle=\"collapse\" href=\"#V";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["numVal"]) || array_key_exists("numVal", $context) ? $context["numVal"] : (function () { throw new RuntimeError('Variable "numVal" does not exist.', 106, $this->source); })()), "html", null, true);
            echo "\"
\t\t\t\t\trole=\"button\" aria-expanded=\"false\" aria-controls=\"V";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["numVal"]) || array_key_exists("numVal", $context) ? $context["numVal"] : (function () { throw new RuntimeError('Variable "numVal" does not exist.', 107, $this->source); })()), "html", null, true);
            echo "\">

\t\t\t\t\t<div class=\"float-left col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventVal"], "getFechas", [], "any", false, false, false, 111), "html", null, true);
            echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-md-right text-left ml-auto col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-trophy\"></i>
\t\t\t\t\t\t";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventVal"], "getCompeticion", [], "any", false, false, false, 116), "html", null, true);
            echo "
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t\t<div class=\"card-body collapse multi-collapse\" id=\"V";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["numVal"]) || array_key_exists("numVal", $context) ? $context["numVal"] : (function () { throw new RuntimeError('Variable "numVal" does not exist.', 122, $this->source); })()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"row text-left\">
\t\t\t\t\t\t";
            // line 124
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventVal"], "getCategoria", [], "any", false, false, false, 124)), "")) {
                // line 125
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCategoria
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventVal"], "getCategoria", [], "any", false, false, false, 130), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 133
            echo "
\t\t\t\t\t\t";
            // line 134
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventVal"], "getLocalidad", [], "any", false, false, false, 134)), "")) {
                // line 135
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tLocalidad
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventVal"], "getLocalidad", [], "any", false, false, false, 140), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 143
            echo "

\t\t\t\t\t\t";
            // line 145
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventVal"], "getCentro", [], "any", false, false, false, 145)), "")) {
                // line 146
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCentro
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventVal"], "getCentro", [], "any", false, false, false, 151), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 154
            echo "

\t\t\t\t\t\t";
            // line 156
            if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, $context["eventVal"], "getHorario", [], "any", false, false, false, 156)), "")) {
                // line 157
                echo "\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">

\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tHorario
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventVal"], "getHorario", [], "any", false, false, false, 163), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 166
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 171
            $context["numVal"] = ((isset($context["numVal"]) || array_key_exists("numVal", $context) ? $context["numVal"] : (function () { throw new RuntimeError('Variable "numVal" does not exist.', 171, $this->source); })()) + 1);
            // line 172
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventVal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t</div>
\t</div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eventos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 173,  374 => 172,  372 => 171,  365 => 166,  359 => 163,  351 => 157,  349 => 156,  345 => 154,  339 => 151,  332 => 146,  330 => 145,  326 => 143,  320 => 140,  313 => 135,  311 => 134,  308 => 133,  302 => 130,  295 => 125,  293 => 124,  288 => 122,  279 => 116,  271 => 111,  264 => 107,  260 => 106,  256 => 104,  251 => 103,  249 => 102,  244 => 99,  237 => 97,  235 => 96,  225 => 88,  219 => 85,  211 => 79,  209 => 78,  205 => 76,  199 => 73,  192 => 68,  190 => 67,  186 => 65,  180 => 62,  173 => 57,  171 => 56,  168 => 55,  162 => 52,  155 => 47,  153 => 46,  146 => 42,  138 => 37,  130 => 32,  123 => 28,  119 => 27,  114 => 24,  109 => 23,  107 => 22,  90 => 7,  80 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{title}}
{% endblock %}

{% block main %}
<div class=\"container\">
\t<nav class=\"my-3\">
\t\t<div class=\"nav nav-tabs nav-justified header-eventos row m-0\" id=\"nav-tab\" role=\"tablist\">

\t\t\t<a class=\"nav-item d-flex align-items-center justify-content-center active\" id=\"nav-auto-tab\"
\t\t\t\tdata-toggle=\"tab\" href=\"#nav-auto\" role=\"tab\" aria-controls=\"nav-auto\"
\t\t\t\taria-selected=\"true\">Autonomica</a>

\t\t\t<a class=\"nav-item d-flex align-items-center justify-content-center\" id=\"nav-val-tab\" data-toggle=\"tab\"
\t\t\t\thref=\"#nav-val\" role=\"tab\" aria-controls=\"nav-val\" aria-selected=\"false\">Valencia</a>

\t\t</div>
\t</nav>
\t<div class=\"tab-content\" id=\"nav-tabContent\">
\t\t<div class=\"tab-pane fade show active\" id=\"nav-auto\" role=\"tabpanel\" aria-labelledby=\"nav-auto-tab\">
\t\t\t{% set num = 0 %}
\t\t\t{% for eventAuto in dataAuto %}

\t\t\t<div class=\"card eventos my-2\">

\t\t\t\t<div class=\"card-header text-left d-flex row m-0\" data-toggle=\"collapse\" href=\"#A{{num}}\" role=\"button\"
\t\t\t\t\taria-expanded=\"false\" aria-controls=\"A{{num}}\">

\t\t\t\t\t<div class=\"float-left col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t{{eventAuto.getFechas}}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-md-right text-left ml-auto col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-trophy\"></i>
\t\t\t\t\t\t{{eventAuto.getCompeticion}}
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"card-body collapse multi-collapse\" id=\"A{{num}}\">

\t\t\t\t\t<div class=\"row text-left\">

\t\t\t\t\t\t{% if eventAuto.getCategoria|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCategoria
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventAuto.getCategoria}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if eventAuto.getLocalidad|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tLocalidad
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventAuto.getLocalidad}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{% if eventAuto.getCentro|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCentro
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventAuto.getCentro}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{% if eventAuto.getHorario|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">

\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tHorario
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventAuto.getHorario}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t\t{% set num = num + 1 %}

\t\t\t{% endfor %}
\t\t</div>

\t\t<div class=\"tab-pane fade\" id=\"nav-val\" role=\"tabpanel\" aria-labelledby=\"nav-val-tab\">
\t\t\t{% set numVal = 0 %}
\t\t\t{% for eventVal in dataVal %}

\t\t\t<div class=\"card eventos my-2\">
\t\t\t\t<div class=\"card-header text-left d-flex row m-0\" data-toggle=\"collapse\" href=\"#V{{numVal}}\"
\t\t\t\t\trole=\"button\" aria-expanded=\"false\" aria-controls=\"V{{numVal}}\">

\t\t\t\t\t<div class=\"float-left col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t{{eventVal.getFechas}}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-md-right text-left ml-auto col-md-6 col-12\">
\t\t\t\t\t\t<i class=\"fas fa-trophy\"></i>
\t\t\t\t\t\t{{eventVal.getCompeticion}}
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t\t<div class=\"card-body collapse multi-collapse\" id=\"V{{numVal}}\">
\t\t\t\t\t<div class=\"row text-left\">
\t\t\t\t\t\t{% if eventVal.getCategoria|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCategoria
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventVal.getCategoria}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if eventVal.getLocalidad|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tLocalidad
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventVal.getLocalidad}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{% if eventVal.getCentro|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">
\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tCentro
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventVal.getCentro}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{% if eventVal.getHorario|spaceless != ''  %}
\t\t\t\t\t\t<div class=\"col-6 col-lg pb-4\">

\t\t\t\t\t\t\t<p class=\"card-text text-md-center\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\tHorario
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{{eventVal.getHorario}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% set numVal = numVal + 1 %}
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</div>
</div>
{% endblock %}", "eventos/index.html.twig", "C:\\symfony\\PI\\proyectoPiscina\\templates\\eventos\\index.html.twig");
    }
}
