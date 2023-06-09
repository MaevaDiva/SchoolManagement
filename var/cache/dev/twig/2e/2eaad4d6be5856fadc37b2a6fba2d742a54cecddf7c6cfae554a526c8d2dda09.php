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

/* eleve/show.html.twig */
class __TwigTemplate_f8aef0afaa8ac8627ff6ebb98b8d755abd38496195df0f98ea068e2f3468b9fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eleve/show.html.twig", 1);
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

        echo "Eleve";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Eleve</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 16, $this->source); })()), "matricule", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomcompletTuteur</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 36, $this->source); })()), "nomcompletTuteur", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TelephoneTuteur</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 40, $this->source); })()), "telephoneTuteur", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EmailTuteur</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 44, $this->source); })()), "emailTuteur", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 48, $this->source); })()), "createdAt", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 48, $this->source); })()), "createdAt", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>";
        // line 52
        ((twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 52, $this->source); })()), "updatedAt", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 52, $this->source); })()), "updatedAt", [], "any", false, false, false, 52), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 56, $this->source); })()), "photo", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 65
        echo twig_include($this->env, $context, "eleve/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eleve/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  186 => 63,  181 => 61,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eleve{% endblock %}

{% block body %}
    <h1>Eleve</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ eleve.id }}</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>{{ eleve.matricule }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ eleve.username }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ eleve.prenom }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ eleve.nom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ eleve.adresse }}</td>
            </tr>
            <tr>
                <th>NomcompletTuteur</th>
                <td>{{ eleve.nomcompletTuteur }}</td>
            </tr>
            <tr>
                <th>TelephoneTuteur</th>
                <td>{{ eleve.telephoneTuteur }}</td>
            </tr>
            <tr>
                <th>EmailTuteur</th>
                <td>{{ eleve.emailTuteur }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ eleve.createdAt ? eleve.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ eleve.updatedAt ? eleve.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ eleve.photo }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_eleve_index') }}\">back to list</a>

    <a href=\"{{ path('app_eleve_edit', {'id': eleve.id}) }}\">edit</a>

    {{ include('eleve/_delete_form.html.twig') }}
{% endblock %}
", "eleve/show.html.twig", "C:\\wamp64\\www\\SYMFONY-PROJECTS\\SchoolManagement\\templates\\eleve\\show.html.twig");
    }
}
