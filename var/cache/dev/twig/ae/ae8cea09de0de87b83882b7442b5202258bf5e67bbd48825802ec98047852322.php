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

/* home/index.html.twig */
class __TwigTemplate_396e54afc628d712e9162967f9dd697f9522d73ace3c011f0444df794d58b0d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "    <div class=\"row clearfix\">
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_anneepedagogique_index");
        echo "\" > 
                    <div class=\"widget-body\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"state\">
                                <h6>CLASSES</h6>
                                <h2>Total</h2>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ik ik-award\"></i>
                            </div>
                        </div>
                        <small class=\"text-small mt-10 d-block\">6% higher than last month</small>
                    </div>
                    <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 62%;\"></div>
                    </div>
                </a>
                
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_index");
        echo "\">
                    <div class=\"widget-body\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"state\">
                                <h6>ELEVES</h6>
                                <h2>Total</h2>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ik ik-thumbs-up\"></i>
                            </div>
                        </div>
                        <small class=\"text-small mt-10 d-block\">61% higher than last month</small>
                    </div>
                    <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 78%;\"></div>
                    </div>
                </a>
               
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"state\">
                            <h6>NOTES</h6>
                            <h2>410</h2>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ik ik-calendar\"></i>
                        </div>
                    </div>
                    <small class=\"text-small mt-10 d-block\">Total Events</small>
                </div>
                <div class=\"progress progress-sm\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"31\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 31%;\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"state\">
                            <h6>DISCIPLINE</h6>
                            <h2>41,410</h2>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ik ik-message-square\"></i>
                        </div>
                    </div>
                    <small class=\"text-small mt-10 d-block\">Total Comments</small>
                </div>
                <div class=\"progress progress-sm\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <div class=\"row clearfix\">
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <a href=\"{{ path('app_anneepedagogique_index')}}\" > 
                    <div class=\"widget-body\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"state\">
                                <h6>CLASSES</h6>
                                <h2>Total</h2>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ik ik-award\"></i>
                            </div>
                        </div>
                        <small class=\"text-small mt-10 d-block\">6% higher than last month</small>
                    </div>
                    <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"62\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 62%;\"></div>
                    </div>
                </a>
                
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <a href=\"{{ path('app_eleve_index')}}\">
                    <div class=\"widget-body\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"state\">
                                <h6>ELEVES</h6>
                                <h2>Total</h2>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ik ik-thumbs-up\"></i>
                            </div>
                        </div>
                        <small class=\"text-small mt-10 d-block\">61% higher than last month</small>
                    </div>
                    <div class=\"progress progress-sm\">
                        <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 78%;\"></div>
                    </div>
                </a>
               
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"state\">
                            <h6>NOTES</h6>
                            <h2>410</h2>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ik ik-calendar\"></i>
                        </div>
                    </div>
                    <small class=\"text-small mt-10 d-block\">Total Events</small>
                </div>
                <div class=\"progress progress-sm\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"31\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 31%;\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
            <div class=\"widget\">
                <div class=\"widget-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"state\">
                            <h6>DISCIPLINE</h6>
                            <h2>41,410</h2>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ik ik-message-square\"></i>
                        </div>
                    </div>
                    <small class=\"text-small mt-10 d-block\">Total Comments</small>
                </div>
                <div class=\"progress progress-sm\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\SYMFONY-PROJECTS\\SchoolManagement\\templates\\home\\index.html.twig");
    }
}
