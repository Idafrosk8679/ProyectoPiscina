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

/* app/index.html.twig */
class __TwigTemplate_3d589f738e4c0c38d787e4921337cd2be5ee3e6c17b8ce5880149ceccd53223e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/index.html.twig"));

        $this->parent = $this->loadTemplate("layoutApp.html.twig", "app/index.html.twig", 1);
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



";
        // line 10
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "rol", [], "any", false, false, false, 10), "usuario") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "rol", [], "any", false, false, false, 10), "entrenador")) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "rol", [], "any", false, false, false, 10), "admin"))) {
            // line 11
            echo "    

";
        }
        // line 14
        echo "


";
        // line 17
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "rol", [], "any", false, false, false, 17), "usuario")) {
            // line 18
            echo "    
<h1>Usuarios index</h1>

    <table class=\"app-table\">
        <thead>
            <tr>
                <th class=\"app-th\">Nombre</th>
                <th class=\"app-th\">Apelllidos</th>
                <th class=\"app-th\">Foto</th>
                <th class=\"app-th\">FechaNac</th>
                <th class=\"app-th\">Grupo</th>
                <th class=\"app-th\">actions</th>
            </tr>
        </thead>
        <tbody>


            ";
            // line 35
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "rol", [], "any", false, false, false, 35), "junta") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "rol", [], "any", false, false, false, 35), "admin"))) {
                // line 36
                echo "                ";
                $context["filtro"] = "";
                // line 37
                echo "            ";
            }
            // line 38
            echo "
            ";
            // line 39
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "rol", [], "any", false, false, false, 39), "entrenador") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "rol", [], "any", false, false, false, 39), "admin"))) {
                // line 40
                echo "                ";
                $context["filtro"] = "junta";
                // line 41
                echo "            ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "usuarios", [], "array", false, false, false, 43));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 44
                echo "
            ";
                // line 45
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuario"], "rol", [], "any", false, false, false, 45), "nombre", [], "any", false, false, false, 45), (isset($context["filtro"]) || array_key_exists("filtro", $context) ? $context["filtro"] : (function () { throw new RuntimeError('Variable "filtro" does not exist.', 45, $this->source); })())) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["usuario"], "dni", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "dni", [], "any", false, false, false, 45)))) {
                    // line 46
                    echo "            <tr>
                <td class=\"app-td\">";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 47), "html", null, true);
                    echo "</td>
                <td class=\"app-td\">";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apelllidos", [], "any", false, false, false, 48), "html", null, true);
                    echo "</td>
                <td class=\"app-td\">";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuario"], "rol", [], "any", false, false, false, 49), "nombre", [], "any", false, false, false, 49), "html", null, true);
                    echo "</td>
                <td class=\"app-td\">";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "foto", [], "any", false, false, false, 50), "html", null, true);
                    echo "</td>
                <td class=\"app-td\">";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "fechaNac", [], "any", false, false, false, 51), "html", null, true);
                    echo "</td>
                <td class=\"app-td\">
                    <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios_show", ["dni" => twig_get_attribute($this->env, $this->source, $context["usuario"], "dni", [], "any", false, false, false, 53)]), "html", null, true);
                    echo "\">show</a>
                    <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios_edit", ["dni" => twig_get_attribute($this->env, $this->source, $context["usuario"], "dni", [], "any", false, false, false, 54)]), "html", null, true);
                    echo "\">edit</a>
                </td>
            </tr>
            ";
                }
                // line 58
                echo "        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 59
                echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </tbody>
    </table>
    
";
        }
        // line 67
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 67,  208 => 63,  199 => 59,  194 => 58,  187 => 54,  183 => 53,  178 => 51,  174 => 50,  170 => 49,  166 => 48,  162 => 47,  159 => 46,  157 => 45,  154 => 44,  149 => 43,  146 => 42,  143 => 41,  140 => 40,  138 => 39,  135 => 38,  132 => 37,  129 => 36,  127 => 35,  108 => 18,  106 => 17,  101 => 14,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layoutApp.html.twig' %}

{% block title %}{{title}}{% endblock %}

{% block main %}




{% if user.rol =='usuario' or user.rol =='entrenador' or user.rol == 'admin' %}
    

{% endif %}



{% if user.rol !='usuario' %}
    
<h1>Usuarios index</h1>

    <table class=\"app-table\">
        <thead>
            <tr>
                <th class=\"app-th\">Nombre</th>
                <th class=\"app-th\">Apelllidos</th>
                <th class=\"app-th\">Foto</th>
                <th class=\"app-th\">FechaNac</th>
                <th class=\"app-th\">Grupo</th>
                <th class=\"app-th\">actions</th>
            </tr>
        </thead>
        <tbody>


            {% if user.rol == 'junta' or user.rol == 'admin' %}
                {% set filtro = '' %}
            {% endif %}

            {% if user.rol == 'entrenador' or user.rol == 'admin' %}
                {% set filtro = 'junta' %}
            {% endif %}

        {% for usuario in data[\"usuarios\"] %}

            {% if usuario.rol.nombre != filtro and usuario.dni != user.dni %}
            <tr>
                <td class=\"app-td\">{{ usuario.nombre }}</td>
                <td class=\"app-td\">{{ usuario.apelllidos }}</td>
                <td class=\"app-td\">{{ usuario.rol.nombre }}</td>
                <td class=\"app-td\">{{ usuario.foto }}</td>
                <td class=\"app-td\">{{ usuario.fechaNac }}</td>
                <td class=\"app-td\">
                    <a href=\"{{ path('usuarios_show', {'dni': usuario.dni}) }}\">show</a>
                    <a href=\"{{ path('usuarios_edit', {'dni': usuario.dni}) }}\">edit</a>
                </td>
            </tr>
            {% endif %}
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
{% endif %}

{% endblock %}
", "app/index.html.twig", "C:\\symfony\\PI\\proyectoPiscina\\templates\\app\\index.html.twig");
    }
}
