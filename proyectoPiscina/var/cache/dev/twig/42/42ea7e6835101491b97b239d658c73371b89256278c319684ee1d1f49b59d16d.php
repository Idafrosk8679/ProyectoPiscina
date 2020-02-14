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

/* add/index.html.twig */
class __TwigTemplate_445bee26a90e7c07ec6ee856315ec1eeab3a77ba3fcb93b02be1826a61566ae8 extends Template
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
        return "layoutApp.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add/index.html.twig"));

        $this->parent = $this->loadTemplate("layoutApp.html.twig", "add/index.html.twig", 1);
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

        echo "Hello AddController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "

<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Atrás</a>

<h1>Crear un usuario</h1>


<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 15, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["nombre"]) {
            // line 16
            echo "
    <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"";
            // line 18
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#";
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "\" role=\"tab\"
            aria-controls=\"";
            // line 19
            echo twig_escape_filter($this->env, $context["nombre"], "html", null, true);
            echo "\" aria-selected=\"true\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["nombre"]), "html", null, true);
            echo "</a>
    </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nombre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</ul>
<div>

</div>
<div class=\"tab-content\" id=\"myTabContent\">

    
    <div class=\"tab-pane fade show active\" id=\"usuario\" role=\"tabpanel\" aria-labelledby=\"usuario-tab\">
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 32, $this->source); })()), "usuario", [], "array", false, false, false, 32), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        echo "

            <label for=\"\">DNI</label>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 35, $this->source); })()), "usuario", [], "array", false, false, false, 35), "dni", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"\">Password</label>
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 37, $this->source); })()), "usuario", [], "array", false, false, false, 37), "pass", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"\">Nombre</label>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 39, $this->source); })()), "usuario", [], "array", false, false, false, 39), "nombre", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"\">Apellidos</label>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 41, $this->source); })()), "usuario", [], "array", false, false, false, 41), "apelllidos", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"\">Rol</label>
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 43, $this->source); })()), "usuario", [], "array", false, false, false, 43), "rol", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"\">Fecha de nacimiento</label>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 45, $this->source); })()), "usuario", [], "array", false, false, false, 45), "fechaNac", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <label for=\"\">Foto</label>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 47, $this->source); })()), "usuario", [], "array", false, false, false, 47), "foto", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            
            <button class=\"btn btn-primary btn-sm\">";
        // line 49
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 50, $this->source); })()), "usuario", [], "array", false, false, false, 50), 'form_end');
        echo "
    </div>



    <div class=\"tab-pane fade show\" id=\"grupo\" role=\"tabpanel\" aria-labelledby=\"grupo-tab\">
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 56, $this->source); })()), "grupo", [], "array", false, false, false, 56), 'form_start');
        echo "

            <label for=\"\">Nombre grupo</label>
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 59, $this->source); })()), "grupo", [], "array", false, false, false, 59), "nombre", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            
            <button class=\"btn btn-primary btn-sm\">";
        // line 61
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 61, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["dataForm"]) || array_key_exists("dataForm", $context) ? $context["dataForm"] : (function () { throw new RuntimeError('Variable "dataForm" does not exist.', 62, $this->source); })()), "grupo", [], "array", false, false, false, 62), 'form_end');
        echo "
    </div>


</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "add/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 62,  204 => 61,  199 => 59,  193 => 56,  184 => 50,  180 => 49,  175 => 47,  170 => 45,  165 => 43,  160 => 41,  155 => 39,  150 => 37,  145 => 35,  139 => 32,  128 => 23,  116 => 19,  110 => 18,  106 => 16,  102 => 15,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layoutApp.html.twig' %}

{% block title %}Hello AddController!{% endblock %}

{% block main %}


<a href=\"{{ path('app_index') }}\">Atrás</a>

<h1>Crear un usuario</h1>


<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">

    {% for nombre in dataForm|keys %}

    <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"{{nombre}}-tab\" data-toggle=\"tab\" href=\"#{{nombre}}\" role=\"tab\"
            aria-controls=\"{{nombre}}\" aria-selected=\"true\">{{nombre|upper}}</a>
    </li>

    {% endfor %}

</ul>
<div>

</div>
<div class=\"tab-content\" id=\"myTabContent\">

    
    <div class=\"tab-pane fade show active\" id=\"usuario\" role=\"tabpanel\" aria-labelledby=\"usuario-tab\">
            {{ form_start(dataForm['usuario'], {'attr':{'class':'needs-validation'} }) }}

            <label for=\"\">DNI</label>
            {{ form_widget(dataForm['usuario'].dni, {'attr':{'class':'form-control'} }) }}
            <label for=\"\">Password</label>
            {{ form_widget(dataForm['usuario'].pass, {'attr':{'class':'form-control'} }) }}
            <label for=\"\">Nombre</label>
            {{ form_widget(dataForm['usuario'].nombre, {'attr':{'class':'form-control'} }) }}
            <label for=\"\">Apellidos</label>
            {{ form_widget(dataForm['usuario'].apelllidos, {'attr':{'class':'form-control'} }) }}
            <label for=\"\">Rol</label>
            {{ form_widget(dataForm['usuario'].rol, {'attr':{'class':'form-control'} }) }}
            <label for=\"\">Fecha de nacimiento</label>
            {{ form_widget(dataForm['usuario'].fechaNac, {'attr':{'class':'form-control'} }) }}
            <label for=\"\">Foto</label>
            {{ form_widget(dataForm['usuario'].foto, {'attr':{'class':'form-control'} }) }}
            
            <button class=\"btn btn-primary btn-sm\">{{ button_label|default('Save') }}</button>
            {{ form_end(dataForm['usuario']) }}
    </div>



    <div class=\"tab-pane fade show\" id=\"grupo\" role=\"tabpanel\" aria-labelledby=\"grupo-tab\">
            {{ form_start(dataForm['grupo']) }}

            <label for=\"\">Nombre grupo</label>
            {{ form_widget(dataForm['grupo'].nombre, {'attr':{'class':'form-control'} }) }}
            
            <button class=\"btn btn-primary btn-sm\">{{ button_label|default('Save') }}</button>
            {{ form_end(dataForm['grupo']) }}
    </div>


</div>



{% endblock %}", "add/index.html.twig", "C:\\symfony\\PI\\proyectoPiscina\\templates\\add\\index.html.twig");
    }
}
