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

/* anneepedagogique/index.html.twig */
class __TwigTemplate_3370fcad9f8ff63513a8a0af0a0af3cb655d8021ab269e87fa835c7b8a618ac7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anneepedagogique/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anneepedagogique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "anneepedagogique/index.html.twig", 1);
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

        echo "Anneepedagogique ";
        
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
        echo "
    <div class=\"card\">
        <div class=\"card-header text-center text-bold \">Année  pédagogique  </div>
            <div class=\"card-body\">
                
                <table class=\"table table-bordered table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Année pédagogique</th>
                            <th>Classe</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anneepedagogiques"]) || array_key_exists("anneepedagogiques", $context) ? $context["anneepedagogiques"] : (function () { throw new RuntimeError('Variable "anneepedagogiques" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["anneepedagogique"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anneepedagogique"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anneepedagogique"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td> ";
            // line 25
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["anneepedagogique"], "classe", [], "any", false, false, false, 25), null))) {
                // line 26
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["anneepedagogique"], "classe", [], "any", false, false, false, 26), "libelle", [], "any", false, false, false, 26), "html", null, true);
                echo "
                                ";
            }
            // line 27
            echo " 
                            </td>
                            <td>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_anneepedagogique_show", ["id" => twig_get_attribute($this->env, $this->source, $context["anneepedagogique"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-outline-info\">show</a>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_anneepedagogique_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["anneepedagogique"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Modifier</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anneepedagogique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>

            </div>
    </div>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_anneepedagogique_new");
        echo "\" class=\"btn btn-outline-success\">Ajouter une année</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "anneepedagogique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 45,  156 => 39,  147 => 35,  138 => 31,  134 => 30,  129 => 27,  123 => 26,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Anneepedagogique {% endblock %}

{% block body %}

    <div class=\"card\">
        <div class=\"card-header text-center text-bold \">Année  pédagogique  </div>
            <div class=\"card-body\">
                
                <table class=\"table table-bordered table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Année pédagogique</th>
                            <th>Classe</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for anneepedagogique in anneepedagogiques %}
                        <tr>
                            <td>{{ anneepedagogique.id }}</td>
                            <td>{{ anneepedagogique.id }}</td>
                            <td> {% if anneepedagogique.classe != null %}
                                {{ anneepedagogique.classe.libelle }}
                                {% endif %} 
                            </td>
                            <td>
                                <a href=\"{{ path('app_anneepedagogique_show', {'id': anneepedagogique.id}) }}\" class=\"btn btn-outline-info\">show</a>
                                <a href=\"{{ path('app_anneepedagogique_edit', {'id': anneepedagogique.id}) }}\" class=\"btn btn-outline-primary\">Modifier</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

            </div>
    </div>

    <a href=\"{{ path('app_anneepedagogique_new') }}\" class=\"btn btn-outline-success\">Ajouter une année</a>
{% endblock %}
", "anneepedagogique/index.html.twig", "C:\\wamp64\\www\\SYMFONY-PROJECTS\\SchoolManagement\\templates\\anneepedagogique\\index.html.twig");
    }
}
