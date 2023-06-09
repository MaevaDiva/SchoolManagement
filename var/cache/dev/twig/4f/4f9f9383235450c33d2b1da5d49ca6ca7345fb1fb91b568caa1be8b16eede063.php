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

/* eleve/_form.html.twig */
class __TwigTemplate_36986b423129b87ed0107981c853a11d83d479caa3b1aca686c299cd539ab825 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"matricule\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "matricule", [], "any", false, false, false, 6), 'label');
        echo "</label>
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "matricule", [], "any", false, false, false, 7), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"prenom\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), 'label');
        echo "</label>
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"nom\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'label');
        echo "</label>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"adresse\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), 'label');
        echo "</label>
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), 'widget');
        echo "
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"nomcomplet\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nomcompletTuteur", [], "any", false, false, false, 31), 'label');
        echo "</label>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nomcompletTuteur", [], "any", false, false, false, 32), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"telephone\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "telephoneTuteur", [], "any", false, false, false, 37), 'label');
        echo "</label>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "telephoneTuteur", [], "any", false, false, false, 38), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"sexe\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "sexe", [], "any", false, false, false, 43), 'label');
        echo "</label>
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "sexe", [], "any", false, false, false, 44), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"formPhoto\" class=\"form-label\"> ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "photo", [], "any", false, false, false, 49), 'label');
        echo " </label>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "photo", [], "any", false, false, false, 50), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"classe\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "classe", [], "any", false, false, false, 55), 'label');
        echo "</label>
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "classe", [], "any", false, false, false, 56), 'widget');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <button class=\"btn btn-outline-secondary col-1\">";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 62, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    </div>
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "eleve/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 64,  161 => 62,  152 => 56,  148 => 55,  140 => 50,  136 => 49,  128 => 44,  124 => 43,  116 => 38,  112 => 37,  104 => 32,  100 => 31,  91 => 25,  87 => 24,  79 => 19,  75 => 18,  67 => 13,  63 => 12,  55 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"matricule\">{{ form_label(form.matricule) }}</label>
                {{ form_widget(form.matricule) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"prenom\">{{ form_label(form.prenom) }}</label>
                {{ form_widget(form.prenom) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"nom\">{{ form_label(form.nom) }}</label>
                {{ form_widget(form.nom) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"adresse\">{{ form_label(form.adresse) }}</label>
                {{ form_widget(form.adresse) }}
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"nomcomplet\">{{ form_label(form.nomcompletTuteur) }}</label>
                {{ form_widget(form.nomcompletTuteur) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"telephone\">{{ form_label(form.telephoneTuteur) }}</label>
                {{ form_widget(form.telephoneTuteur) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"sexe\">{{ form_label(form.sexe) }}</label>
                {{ form_widget(form.sexe) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"formPhoto\" class=\"form-label\"> {{form_label(form.photo)}} </label>
                {{ form_widget(form.photo) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <label for=\"classe\">{{ form_label(form.classe) }}</label>
                {{ form_widget(form.classe) }}
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center\">
        <button class=\"btn btn-outline-secondary col-1\">{{ button_label|default('Save') }}</button>
    </div>
{{ form_end(form) }}
", "eleve/_form.html.twig", "C:\\wamp64\\www\\SYMFONY-PROJECTS\\SchoolManagement\\templates\\eleve\\_form.html.twig");
    }
}
