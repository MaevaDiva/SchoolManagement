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

/* base.html.twig */
class __TwigTemplate_54b2e944c7bdf5a15acacaa76f2c40d7593eefe4ed8994b5d3a0f6385a2ac22f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" />       

        <!-- Bootstrap Css -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\"/> <!-- Icons Css -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
                
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icon-kit/dist/css/iconkit.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/theme.min.css"), "html", null, true);
        echo "\">
            
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    </head>

    <body>
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
            <div class=\"wrapper\">
                <header class=\"header-top\" header-theme=\"light\">
                    <div class=\"container-fluid\">
                        <div class=\"d-flex justify-content-between\">
                            <div class=\"top-menu d-flex align-items-center\">
                                <button type=\"button\" class=\"btn-icon mobile-nav-toggle d-lg-none\"><span></span></button>
                                <div class=\"header-search\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon search-close\"><i class=\"ik ik-x\"></i></span>
                                        <input type=\"text\" class=\"form-control\">
                                        <span class=\"input-group-addon search-btn\"><i class=\"ik ik-search\"></i></span>
                                    </div>
                                </div>
                                <button type=\"button\" id=\"navbar-fullscreen\" class=\"nav-link\"><i class=\"ik ik-maximize\"></i></button>
                            </div>
                            <div class=\"top-menu d-flex align-items-center\">
                                <div class=\"dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"notiDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ik ik-bell\"></i><span class=\"badge bg-danger\">3</span></a>
                                    <div class=\"dropdown-menu dropdown-menu-right notification-dropdown\" aria-labelledby=\"notiDropdown\">
                                        <h4 class=\"header\">Notifications</h4>
                                        <div class=\"notifications-wrap\">
                                            <a href=\"#\" class=\"media\">
                                                <span class=\"d-flex\">
                                                    <i class=\"ik ik-check\"></i> 
                                                </span>
                                                <span class=\"media-body\">
                                                    <span class=\"heading-font-family media-heading\">Invitation accepted</span> 
                                                    <span class=\"media-content\">Your have been Invited ...</span>
                                                </span>
                                            </a>
                                            <a href=\"#\" class=\"media\">
                                                <span class=\"d-flex\">
                                                    <img src=\"\" class=\"rounded-circle\" alt=\"\">
                                                </span>
                                                <span class=\"media-body\">
                                                    <span class=\"heading-font-family media-heading\">Steve Smith</span> 
                                                    <span class=\"media-content\">I slowly updated projects</span>
                                                </span>
                                            </a>
                                            <a href=\"#\" class=\"media\">
                                                <span class=\"d-flex\">
                                                    <i class=\"ik ik-calendar\"></i> 
                                                </span>
                                                <span class=\"media-body\">
                                                    <span class=\"heading-font-family media-heading\">To Do</span> 
                                                    <span class=\"media-content\">Meeting with Nathan on Friday 8 AM ...</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class=\"footer\"><a href=\"javascript:void(0);\">See all activity</a></div>
                                    </div>
                                </div>
                                <button type=\"button\" class=\"nav-link ml-10 right-sidebar-toggle\"><i class=\"ik ik-message-square\"></i><span class=\"badge bg-success\">3</span></button>
                                <div class=\"dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"menuDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ik ik-plus\"></i></a>
                                    <div class=\"dropdown-menu dropdown-menu-right menu-grid\" aria-labelledby=\"menuDropdown\">
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dashboard\"><i class=\"ik ik-bar-chart-2\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Message\"><i class=\"ik ik-mail\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Accounts\"><i class=\"ik ik-users\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sales\"><i class=\"ik ik-shopping-cart\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Purchase\"><i class=\"ik ik-briefcase\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pages\"><i class=\"ik ik-clipboard\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Chats\"><i class=\"ik ik-message-square\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Contacts\"><i class=\"ik ik-map-pin\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Blocks\"><i class=\"ik ik-inbox\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Events\"><i class=\"ik ik-calendar\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Notifications\"><i class=\"ik ik-bell\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More\"><i class=\"ik ik-more-horizontal\"></i></a>
                                    </div>
                                </div>
                                <button type=\"button\" class=\"nav-link ml-10\" id=\"apps_modal_btn\" data-toggle=\"modal\" data-target=\"#appsModal\"><i class=\"ik ik-grid\"></i></button>
                                <div class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <img class=\"avatar\" src=\"\" alt=\"\"></a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ik ik-user dropdown-icon\"></i> Profile</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ik ik-settings dropdown-icon\"></i> Settings</a>
                                        <a class=\"dropdown-item\" href=\"#\"><span class=\"float-right\"><span class=\"badge badge-primary\">6</span></span><i class=\"ik ik-mail dropdown-icon\"></i> Inbox</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ik ik-navigation dropdown-icon\"></i> Message</a>
                                        <a class=\"dropdown-item\" href=\"login.html\"><i class=\"ik ik-power dropdown-icon\"></i> Logout</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </header>

                <div class=\"page-wrap\">
                    <div class=\"app-sidebar colored\">
                        <div class=\"sidebar-header\">
                            <a class=\"header-brand\" href=\"index.html\">
                                <div class=\"logo-img\">
                                <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/brand-white.svg"), "html", null, true);
        echo "\" class=\"header-brand-img\" alt=\"lavalite\"> 
                                </div>
                                <span class=\"text\">ThemeKit</span>
                            </a>
                            <button type=\"button\" class=\"nav-toggle\"><i data-toggle=\"expanded\" class=\"ik ik-toggle-right toggle-icon\"></i></button>
                            <button id=\"sidebarClose\" class=\"nav-close\"><i class=\"ik ik-x\"></i></button>
                        </div>
                        
                        <div class=\"sidebar-content\">
                            <div class=\"nav-container\">
                                <nav id=\"main-menu-navigation\" class=\"navigation-main\">
                                    <div class=\"nav-lavel\">Navigation</div>
                                    <div class=\"nav-item active\">
                                        <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"><i class=\"ik ik-bar-chart-2\"></i><span>Dashboard</span></a>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/navbar.html\"><i class=\"ik ik-menu\"></i><span>Navigation</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"javascript:void(0)\"><i class=\"ik ik-layers\"></i><span>Widgets</span> <span class=\"badge badge-danger\">150+</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/widgets.html\" class=\"menu-item\">Basic</a>
                                            <a href=\"pages/widget-statistic.html\" class=\"menu-item\">Statistic</a>
                                            <a href=\"pages/widget-data.html\" class=\"menu-item\">Data</a>
                                            <a href=\"pages/widget-chart.html\" class=\"menu-item\">Chart Widget</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-lavel\">Scolarité</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-box\"></i><span>Inscription</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/alerts.html\" class=\"menu-item\">Alerts</a>
                                            <a href=\"pages/ui/badges.html\" class=\"menu-item\">Badges</a>
                                            <a href=\"pages/ui/buttons.html\" class=\"menu-item\">Buttons</a>
                                            <a href=\"pages/ui/navigation.html\" class=\"menu-item\">Navigation</a>
                                        </div>
                                    </div>
                                    
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-gitlab\"></i><span>Comptabilité</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/modals.html\" class=\"menu-item\">Modals</a>
                                            <a href=\"pages/ui/notifications.html\" class=\"menu-item\">Notifications</a>
                                            <a href=\"pages/ui/carousel.html\" class=\"menu-item\">Slider</a>
                                            <a href=\"pages/ui/range-slider.html\" class=\"menu-item\">Range Slider</a>
                                            <a href=\"pages/ui/rating.html\" class=\"menu-item\">Rating</a>
                                        </div>
                                    </div>
                                 
                                    <div class=\"nav-lavel\">Gestion pédagogique</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-edit\"></i><span>Notes</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/form-components.html\" class=\"menu-item\">Components</a>
                                            <a href=\"pages/form-addon.html\" class=\"menu-item\">Add-On</a>
                                            <a href=\"pages/form-advance.html\" class=\"menu-item\">Advance</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/form-picker.html\"><i class=\"ik ik-terminal\"></i><span>Bulletins</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/form-picker.html\"><i class=\"ik ik-terminal\"></i><span>Discipline</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>

                                    <div class=\"nav-lavel\">Emplois du temps</div>
                                   

                                    <div class=\"nav-lavel\">Charts</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-pie-chart\"></i><span>Charts</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"\" class=\"menu-item active\">Chartist</a>
                                            <a href=\"\" class=\"menu-item\">Flot</a>
                                           
                                        </div>
                                    </div>

                                               
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class=\"main-content\">
                        <div class=\"container-fluid\">
                            
                            ";
        // line 211
        $this->displayBlock('body', $context, $blocks);
        // line 214
        echo "                    
                        </div>
                    </div>

                    
                    <div class=\"chat-panel\" hidden>
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between\">
                                <a href=\"javascript:void(0);\"><i class=\"ik ik-message-square text-success\"></i></a>  
                                <span class=\"user-name\">John Doe</span> 
                                <button type=\"button\" class=\"close\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"card-body\">
                            
                            </div>
                            <form action=\"javascript:void(0)\" class=\"card-footer\" method=\"post\">
                                <div class=\"d-flex justify-content-end\">
                                    <textarea class=\"border-0 flex-1\" rows=\"1\" placeholder=\"Type your message here\"></textarea>
                                    <button class=\"btn btn-icon\" type=\"submit\"><i class=\"ik ik-arrow-right text-success\"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <footer class=\"footer\">
                        <div class=\"w-100 clearfix\">
                            <span class=\"text-center text-sm-left d-md-inline-block\">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                            <span class=\"float-none float-sm-right mt-1 mt-sm-0 text-center\">Crafted with <i class=\"fa fa-heart text-danger\"></i> by <a href=\"http://lavalite.org/\" class=\"text-dark\" target=\"_blank\">Lavalite</a></span>
                        </div>
                    </footer>
                    
                </div>
            </div>


        <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>  

        
        <div class=\"modal fade apps-modal\" id=\"appsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"appsModalLabel\" aria-hidden=\"true\" data-backdrop=\"false\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"ik ik-x-circle\"></i></button>
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"quick-search\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-4 ml-auto mr-auto\">
                                    <div class=\"input-wrap\">
                                        <input type=\"text\" id=\"quick-search\" class=\"form-control\" placeholder=\"Search...\" />
                                        <i class=\"ik ik-search\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"container\">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        ";
        // line 278
        $this->displayBlock('scripts', $context, $blocks);
        // line 281
        echo "               
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 212
        echo "                               
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 278
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 279
        echo "            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 279,  414 => 278,  403 => 212,  393 => 211,  374 => 6,  361 => 281,  359 => 278,  327 => 249,  290 => 214,  288 => 211,  211 => 137,  195 => 124,  89 => 21,  84 => 19,  80 => 18,  76 => 17,  71 => 15,  67 => 14,  61 => 11,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> {% block title %}   {% endblock  %}</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <link rel=\"icon\" href=\"{{ asset('img/favicon.ico')}}\" type=\"image/x-icon\" />       

        <!-- Bootstrap Css -->
        <link href=\"{{ asset('admin/dist/assets/css/bootstrap.min.css') }}\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\"/> <!-- Icons Css -->
        <link href=\"{{ asset('admin/dist/assets/css/icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
                
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('dist/css/theme.min.css') }}\">
            
        <script src=\"{{ asset('admin/dist/assets/libs/jquery/jquery.min.js')}}\"></script>

    </head>

    <body>
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
            <div class=\"wrapper\">
                <header class=\"header-top\" header-theme=\"light\">
                    <div class=\"container-fluid\">
                        <div class=\"d-flex justify-content-between\">
                            <div class=\"top-menu d-flex align-items-center\">
                                <button type=\"button\" class=\"btn-icon mobile-nav-toggle d-lg-none\"><span></span></button>
                                <div class=\"header-search\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-addon search-close\"><i class=\"ik ik-x\"></i></span>
                                        <input type=\"text\" class=\"form-control\">
                                        <span class=\"input-group-addon search-btn\"><i class=\"ik ik-search\"></i></span>
                                    </div>
                                </div>
                                <button type=\"button\" id=\"navbar-fullscreen\" class=\"nav-link\"><i class=\"ik ik-maximize\"></i></button>
                            </div>
                            <div class=\"top-menu d-flex align-items-center\">
                                <div class=\"dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"notiDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ik ik-bell\"></i><span class=\"badge bg-danger\">3</span></a>
                                    <div class=\"dropdown-menu dropdown-menu-right notification-dropdown\" aria-labelledby=\"notiDropdown\">
                                        <h4 class=\"header\">Notifications</h4>
                                        <div class=\"notifications-wrap\">
                                            <a href=\"#\" class=\"media\">
                                                <span class=\"d-flex\">
                                                    <i class=\"ik ik-check\"></i> 
                                                </span>
                                                <span class=\"media-body\">
                                                    <span class=\"heading-font-family media-heading\">Invitation accepted</span> 
                                                    <span class=\"media-content\">Your have been Invited ...</span>
                                                </span>
                                            </a>
                                            <a href=\"#\" class=\"media\">
                                                <span class=\"d-flex\">
                                                    <img src=\"\" class=\"rounded-circle\" alt=\"\">
                                                </span>
                                                <span class=\"media-body\">
                                                    <span class=\"heading-font-family media-heading\">Steve Smith</span> 
                                                    <span class=\"media-content\">I slowly updated projects</span>
                                                </span>
                                            </a>
                                            <a href=\"#\" class=\"media\">
                                                <span class=\"d-flex\">
                                                    <i class=\"ik ik-calendar\"></i> 
                                                </span>
                                                <span class=\"media-body\">
                                                    <span class=\"heading-font-family media-heading\">To Do</span> 
                                                    <span class=\"media-content\">Meeting with Nathan on Friday 8 AM ...</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class=\"footer\"><a href=\"javascript:void(0);\">See all activity</a></div>
                                    </div>
                                </div>
                                <button type=\"button\" class=\"nav-link ml-10 right-sidebar-toggle\"><i class=\"ik ik-message-square\"></i><span class=\"badge bg-success\">3</span></button>
                                <div class=\"dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"menuDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ik ik-plus\"></i></a>
                                    <div class=\"dropdown-menu dropdown-menu-right menu-grid\" aria-labelledby=\"menuDropdown\">
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Dashboard\"><i class=\"ik ik-bar-chart-2\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Message\"><i class=\"ik ik-mail\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Accounts\"><i class=\"ik ik-users\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Sales\"><i class=\"ik ik-shopping-cart\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Purchase\"><i class=\"ik ik-briefcase\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Pages\"><i class=\"ik ik-clipboard\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Chats\"><i class=\"ik ik-message-square\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Contacts\"><i class=\"ik ik-map-pin\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Blocks\"><i class=\"ik ik-inbox\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Events\"><i class=\"ik ik-calendar\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Notifications\"><i class=\"ik ik-bell\"></i></a>
                                        <a class=\"dropdown-item\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"More\"><i class=\"ik ik-more-horizontal\"></i></a>
                                    </div>
                                </div>
                                <button type=\"button\" class=\"nav-link ml-10\" id=\"apps_modal_btn\" data-toggle=\"modal\" data-target=\"#appsModal\"><i class=\"ik ik-grid\"></i></button>
                                <div class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <img class=\"avatar\" src=\"\" alt=\"\"></a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ik ik-user dropdown-icon\"></i> Profile</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ik ik-settings dropdown-icon\"></i> Settings</a>
                                        <a class=\"dropdown-item\" href=\"#\"><span class=\"float-right\"><span class=\"badge badge-primary\">6</span></span><i class=\"ik ik-mail dropdown-icon\"></i> Inbox</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ik ik-navigation dropdown-icon\"></i> Message</a>
                                        <a class=\"dropdown-item\" href=\"login.html\"><i class=\"ik ik-power dropdown-icon\"></i> Logout</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </header>

                <div class=\"page-wrap\">
                    <div class=\"app-sidebar colored\">
                        <div class=\"sidebar-header\">
                            <a class=\"header-brand\" href=\"index.html\">
                                <div class=\"logo-img\">
                                <img src=\"{{ asset('src/img/brand-white.svg')}}\" class=\"header-brand-img\" alt=\"lavalite\"> 
                                </div>
                                <span class=\"text\">ThemeKit</span>
                            </a>
                            <button type=\"button\" class=\"nav-toggle\"><i data-toggle=\"expanded\" class=\"ik ik-toggle-right toggle-icon\"></i></button>
                            <button id=\"sidebarClose\" class=\"nav-close\"><i class=\"ik ik-x\"></i></button>
                        </div>
                        
                        <div class=\"sidebar-content\">
                            <div class=\"nav-container\">
                                <nav id=\"main-menu-navigation\" class=\"navigation-main\">
                                    <div class=\"nav-lavel\">Navigation</div>
                                    <div class=\"nav-item active\">
                                        <a href=\"{{ path('accueil')}}\"><i class=\"ik ik-bar-chart-2\"></i><span>Dashboard</span></a>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/navbar.html\"><i class=\"ik ik-menu\"></i><span>Navigation</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"javascript:void(0)\"><i class=\"ik ik-layers\"></i><span>Widgets</span> <span class=\"badge badge-danger\">150+</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/widgets.html\" class=\"menu-item\">Basic</a>
                                            <a href=\"pages/widget-statistic.html\" class=\"menu-item\">Statistic</a>
                                            <a href=\"pages/widget-data.html\" class=\"menu-item\">Data</a>
                                            <a href=\"pages/widget-chart.html\" class=\"menu-item\">Chart Widget</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-lavel\">Scolarité</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-box\"></i><span>Inscription</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/alerts.html\" class=\"menu-item\">Alerts</a>
                                            <a href=\"pages/ui/badges.html\" class=\"menu-item\">Badges</a>
                                            <a href=\"pages/ui/buttons.html\" class=\"menu-item\">Buttons</a>
                                            <a href=\"pages/ui/navigation.html\" class=\"menu-item\">Navigation</a>
                                        </div>
                                    </div>
                                    
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-gitlab\"></i><span>Comptabilité</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/modals.html\" class=\"menu-item\">Modals</a>
                                            <a href=\"pages/ui/notifications.html\" class=\"menu-item\">Notifications</a>
                                            <a href=\"pages/ui/carousel.html\" class=\"menu-item\">Slider</a>
                                            <a href=\"pages/ui/range-slider.html\" class=\"menu-item\">Range Slider</a>
                                            <a href=\"pages/ui/rating.html\" class=\"menu-item\">Rating</a>
                                        </div>
                                    </div>
                                 
                                    <div class=\"nav-lavel\">Gestion pédagogique</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-edit\"></i><span>Notes</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/form-components.html\" class=\"menu-item\">Components</a>
                                            <a href=\"pages/form-addon.html\" class=\"menu-item\">Add-On</a>
                                            <a href=\"pages/form-advance.html\" class=\"menu-item\">Advance</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/form-picker.html\"><i class=\"ik ik-terminal\"></i><span>Bulletins</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/form-picker.html\"><i class=\"ik ik-terminal\"></i><span>Discipline</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>

                                    <div class=\"nav-lavel\">Emplois du temps</div>
                                   

                                    <div class=\"nav-lavel\">Charts</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-pie-chart\"></i><span>Charts</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"\" class=\"menu-item active\">Chartist</a>
                                            <a href=\"\" class=\"menu-item\">Flot</a>
                                           
                                        </div>
                                    </div>

                                               
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class=\"main-content\">
                        <div class=\"container-fluid\">
                            
                            {% block body %}
                               
                            {% endblock  %}
                    
                        </div>
                    </div>

                    
                    <div class=\"chat-panel\" hidden>
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between\">
                                <a href=\"javascript:void(0);\"><i class=\"ik ik-message-square text-success\"></i></a>  
                                <span class=\"user-name\">John Doe</span> 
                                <button type=\"button\" class=\"close\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"card-body\">
                            
                            </div>
                            <form action=\"javascript:void(0)\" class=\"card-footer\" method=\"post\">
                                <div class=\"d-flex justify-content-end\">
                                    <textarea class=\"border-0 flex-1\" rows=\"1\" placeholder=\"Type your message here\"></textarea>
                                    <button class=\"btn btn-icon\" type=\"submit\"><i class=\"ik ik-arrow-right text-success\"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <footer class=\"footer\">
                        <div class=\"w-100 clearfix\">
                            <span class=\"text-center text-sm-left d-md-inline-block\">Copyright © 2018 ThemeKit v2.0. All Rights Reserved.</span>
                            <span class=\"float-none float-sm-right mt-1 mt-sm-0 text-center\">Crafted with <i class=\"fa fa-heart text-danger\"></i> by <a href=\"http://lavalite.org/\" class=\"text-dark\" target=\"_blank\">Lavalite</a></span>
                        </div>
                    </footer>
                    
                </div>
            </div>


        <script src=\"{{ asset('admin/dist/assets/libs/bootstrap/js/bootstrap.min.js')}}\"></script>  

        
        <div class=\"modal fade apps-modal\" id=\"appsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"appsModalLabel\" aria-hidden=\"true\" data-backdrop=\"false\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"ik ik-x-circle\"></i></button>
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"quick-search\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-4 ml-auto mr-auto\">
                                    <div class=\"input-wrap\">
                                        <input type=\"text\" id=\"quick-search\" class=\"form-control\" placeholder=\"Search...\" />
                                        <i class=\"ik ik-search\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-body d-flex align-items-center\">
                        <div class=\"container\">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        {% block scripts %}
            
        {% endblock  %}
               
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\SYMFONY-PROJECTS\\SchoolManagement\\templates\\base.html.twig");
    }
}
