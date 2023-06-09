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

/* anneepedagogique/_form.html.twig */
class __TwigTemplate_e48c3ffa1678f7a4f8780589df218a5cd5cd34c148db3cedd987595c113f5972 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anneepedagogique/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anneepedagogique/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

    <div class=\"card\">
        <div class=\"card-header\">    <h1>Ajouter Annee pédagogique</h1>  </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"annee1\">De : </label>
                        <input type=\"date\" class=\"form-control\" id=\"annee1\" name=\"annee_1\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"annee_2\">à: </label>
                        <input type=\"date\" class=\"form-control\" id=\"annee2\" name=\"annee_2\">
                    </div>
                </div>
                <div class=\"col-md-6\">

                    <div class=\"form-group\">
                        <label for=\"annee1_annee2\"> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "libelleAnnee", [], "any", false, false, false, 20), 'label');
        echo "</label>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "libelleAnnee", [], "any", false, false, false, 21), 'widget');
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label for=\"classe\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "classe", [], "any", false, false, false, 25), 'label');
        echo "</label>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "classe", [], "any", false, false, false, 26), 'widget');
        echo "

                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 \">
                <button class=\"btn btn-secondary\" type=\"submit\" >Sauvegarder</button>
            </div>
        </div>
    </div>

";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "


";
        // line 40
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 41
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            document.getElementById(\"anneepedagogique_libelleAnnee\").setAttribute(\"readonly\", true);

            //recupérer les annees seulement
            var date1 = \$(\"#annee1\").val();
            let annee1 = date1.substr(0,4);
            var date2 = \$(\"#annee2\").val();
            let  annee2 = date2.substr(0,4);
             // Afficher la valeur
            
            \$(\"#annee2\").blur(function() {
                console.log(date1);
                console.log(date2);
                document.getElementById(\"anneepedagogique_libelleAnnee\").value = annee1+\"-\"+annee2;
            })

           
        })
        

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "anneepedagogique/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  101 => 40,  95 => 37,  81 => 26,  77 => 25,  70 => 21,  66 => 20,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

    <div class=\"card\">
        <div class=\"card-header\">    <h1>Ajouter Annee pédagogique</h1>  </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"annee1\">De : </label>
                        <input type=\"date\" class=\"form-control\" id=\"annee1\" name=\"annee_1\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"annee_2\">à: </label>
                        <input type=\"date\" class=\"form-control\" id=\"annee2\" name=\"annee_2\">
                    </div>
                </div>
                <div class=\"col-md-6\">

                    <div class=\"form-group\">
                        <label for=\"annee1_annee2\"> {{ form_label(form.libelleAnnee)}}</label>
                        {{ form_widget(form.libelleAnnee) }}

                    </div>
                    <div class=\"form-group\">
                        <label for=\"classe\">{{ form_label(form.classe)}}</label>
                        {{ form_widget(form.classe) }}

                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 \">
                <button class=\"btn btn-secondary\" type=\"submit\" >Sauvegarder</button>
            </div>
        </div>
    </div>

{{ form_end(form) }}


{% block scripts %}
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            document.getElementById(\"anneepedagogique_libelleAnnee\").setAttribute(\"readonly\", true);

            //recupérer les annees seulement
            var date1 = \$(\"#annee1\").val();
            let annee1 = date1.substr(0,4);
            var date2 = \$(\"#annee2\").val();
            let  annee2 = date2.substr(0,4);
             // Afficher la valeur
            
            \$(\"#annee2\").blur(function() {
                console.log(date1);
                console.log(date2);
                document.getElementById(\"anneepedagogique_libelleAnnee\").value = annee1+\"-\"+annee2;
            })

           
        })
        

    </script>
{% endblock  %}", "anneepedagogique/_form.html.twig", "C:\\wamp64\\www\\SYMFONY-PROJECTS\\SchoolManagement\\templates\\anneepedagogique\\_form.html.twig");
    }
}
