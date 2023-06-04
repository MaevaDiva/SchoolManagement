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
            'content' => [$this, 'block_content'],
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
<html class=\"no-js\" lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\" />

        <link href=\"https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800\" rel=\"stylesheet\">
       
        <script src=\"src/js/vendor/modernizr-2.8.3.min.js\"></script>

        <!-- Bootstrap Css -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\"/> <!-- Icons Css -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        
            
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icon-kit/dist/css/iconkit.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/ionicons/dist/css/ionicons.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/perfect-scrollbar/css/perfect-scrollbar.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/weather-icons/css/weather-icons.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/c3/c3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/theme.min.css"), "html", null, true);
        echo "\">

            

    </head>

    <body>
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 349
        echo "        
        

        
        <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>  
        <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/metismenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/dist/assets/libs/node-waves/waves.min.js"), "html", null, true);
        echo "\"></script>
       
        <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/js/theme.min.js"), "html", null, true);
        echo " \"></script>


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
        // line 390
        $this->displayBlock('scripts', $context, $blocks);
        // line 393
        echo "       
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
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

        // line 7
        echo "            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 47
        echo "            <div class=\"wrapper\">
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
                                                    <img src=\"img/users/1.jpg\" class=\"rounded-circle\" alt=\"\">
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
                                    <a class=\"dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img class=\"avatar\" src=\"img/user.jpg\" alt=\"\"></a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"profile.html\"><i class=\"ik ik-user dropdown-icon\"></i> Profile</a>
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
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("src/img/brand-white.svg"), "html", null, true);
        echo " \" class=\"header-brand-img\" alt=\"lavalite\"> 
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
                                        <a href=\"index.html\"><i class=\"ik ik-bar-chart-2\"></i><span>Dashboard</span></a>
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
                                    <div class=\"nav-lavel\">UI Element</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-box\"></i><span>Basic</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/alerts.html\" class=\"menu-item\">Alerts</a>
                                            <a href=\"pages/ui/badges.html\" class=\"menu-item\">Badges</a>
                                            <a href=\"pages/ui/buttons.html\" class=\"menu-item\">Buttons</a>
                                            <a href=\"pages/ui/navigation.html\" class=\"menu-item\">Navigation</a>
                                        </div>
                                    </div>
                                    
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-gitlab\"></i><span>Advance</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/modals.html\" class=\"menu-item\">Modals</a>
                                            <a href=\"pages/ui/notifications.html\" class=\"menu-item\">Notifications</a>
                                            <a href=\"pages/ui/carousel.html\" class=\"menu-item\">Slider</a>
                                            <a href=\"pages/ui/range-slider.html\" class=\"menu-item\">Range Slider</a>
                                            <a href=\"pages/ui/rating.html\" class=\"menu-item\">Rating</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-package\"></i><span>Extra</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/session-timeout.html\" class=\"menu-item\">Session Timeout</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/ui/icons.html\"><i class=\"ik ik-command\"></i><span>Icons</span></a>
                                    </div>
                                    <div class=\"nav-lavel\">Forms</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-edit\"></i><span>Forms</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/form-components.html\" class=\"menu-item\">Components</a>
                                            <a href=\"pages/form-addon.html\" class=\"menu-item\">Add-On</a>
                                            <a href=\"pages/form-advance.html\" class=\"menu-item\">Advance</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/form-picker.html\"><i class=\"ik ik-terminal\"></i><span>Form Picker</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>

                                    <div class=\"nav-lavel\">Tables</div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/table-bootstrap.html\"><i class=\"ik ik-credit-card\"></i><span>Bootstrap Table</span></a>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/table-datatable.html\"><i class=\"ik ik-inbox\"></i><span>Data Table</span></a>
                                    </div>

                                    <div class=\"nav-lavel\">Charts</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-pie-chart\"></i><span>Charts</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/charts-chartist.html\" class=\"menu-item active\">Chartist</a>
                                            <a href=\"pages/charts-flot.html\" class=\"menu-item\">Flot</a>
                                            <a href=\"pages/charts-knob.html\" class=\"menu-item\">Knob</a>
                                            <a href=\"pages/charts-amcharts.html\" class=\"menu-item\">Amcharts</a>
                                        </div>
                                    </div>

                                

                                
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"main-content\">
                        <div class=\"container-fluid\">
                            <div class=\"row clearfix\">
                                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"state\">
                                                    <h6>Bookmarks</h6>
                                                    <h2>1,410</h2>
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
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"state\">
                                                    <h6>Likes</h6>
                                                    <h2>41,410</h2>
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
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"state\">
                                                    <h6>Events</h6>
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
                                                    <h6>Comments</h6>
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
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 390
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 391
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
        return array (  585 => 391,  575 => 390,  355 => 139,  261 => 47,  251 => 46,  240 => 7,  230 => 6,  208 => 393,  206 => 390,  174 => 361,  169 => 359,  165 => 358,  161 => 357,  157 => 356,  153 => 355,  149 => 354,  145 => 353,  139 => 349,  137 => 46,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  73 => 21,  69 => 20,  55 => 8,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <title> {% block title %}
            
        {% endblock  %}</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\" />

        <link href=\"https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800\" rel=\"stylesheet\">
       
        <script src=\"src/js/vendor/modernizr-2.8.3.min.js\"></script>

        <!-- Bootstrap Css -->
        <link href=\"{{ asset('admin/dist/assets/css/bootstrap.min.css')}}\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\"/> <!-- Icons Css -->
        <link href=\"{{ asset('admin/dist/assets/css/icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
        
            
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/fontawesome-free/css/all.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/jvectormap/jquery-jvectormap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/c3/c3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('dist/css/theme.min.css') }}\">

            

    </head>

    <body>
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        {% block content %}
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
                                                    <img src=\"img/users/1.jpg\" class=\"rounded-circle\" alt=\"\">
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
                                    <a class=\"dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img class=\"avatar\" src=\"img/user.jpg\" alt=\"\"></a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"profile.html\"><i class=\"ik ik-user dropdown-icon\"></i> Profile</a>
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
                                <img src=\"{{ asset('src/img/brand-white.svg')}} \" class=\"header-brand-img\" alt=\"lavalite\"> 
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
                                        <a href=\"index.html\"><i class=\"ik ik-bar-chart-2\"></i><span>Dashboard</span></a>
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
                                    <div class=\"nav-lavel\">UI Element</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-box\"></i><span>Basic</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/alerts.html\" class=\"menu-item\">Alerts</a>
                                            <a href=\"pages/ui/badges.html\" class=\"menu-item\">Badges</a>
                                            <a href=\"pages/ui/buttons.html\" class=\"menu-item\">Buttons</a>
                                            <a href=\"pages/ui/navigation.html\" class=\"menu-item\">Navigation</a>
                                        </div>
                                    </div>
                                    
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-gitlab\"></i><span>Advance</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/modals.html\" class=\"menu-item\">Modals</a>
                                            <a href=\"pages/ui/notifications.html\" class=\"menu-item\">Notifications</a>
                                            <a href=\"pages/ui/carousel.html\" class=\"menu-item\">Slider</a>
                                            <a href=\"pages/ui/range-slider.html\" class=\"menu-item\">Range Slider</a>
                                            <a href=\"pages/ui/rating.html\" class=\"menu-item\">Rating</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-package\"></i><span>Extra</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/ui/session-timeout.html\" class=\"menu-item\">Session Timeout</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/ui/icons.html\"><i class=\"ik ik-command\"></i><span>Icons</span></a>
                                    </div>
                                    <div class=\"nav-lavel\">Forms</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-edit\"></i><span>Forms</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/form-components.html\" class=\"menu-item\">Components</a>
                                            <a href=\"pages/form-addon.html\" class=\"menu-item\">Add-On</a>
                                            <a href=\"pages/form-advance.html\" class=\"menu-item\">Advance</a>
                                        </div>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/form-picker.html\"><i class=\"ik ik-terminal\"></i><span>Form Picker</span> <span class=\"badge badge-success\">New</span></a>
                                    </div>

                                    <div class=\"nav-lavel\">Tables</div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/table-bootstrap.html\"><i class=\"ik ik-credit-card\"></i><span>Bootstrap Table</span></a>
                                    </div>
                                    <div class=\"nav-item\">
                                        <a href=\"pages/table-datatable.html\"><i class=\"ik ik-inbox\"></i><span>Data Table</span></a>
                                    </div>

                                    <div class=\"nav-lavel\">Charts</div>
                                    <div class=\"nav-item has-sub\">
                                        <a href=\"#\"><i class=\"ik ik-pie-chart\"></i><span>Charts</span> <span class=\"badge badge-success\">New</span></a>
                                        <div class=\"submenu-content\">
                                            <a href=\"pages/charts-chartist.html\" class=\"menu-item active\">Chartist</a>
                                            <a href=\"pages/charts-flot.html\" class=\"menu-item\">Flot</a>
                                            <a href=\"pages/charts-knob.html\" class=\"menu-item\">Knob</a>
                                            <a href=\"pages/charts-amcharts.html\" class=\"menu-item\">Amcharts</a>
                                        </div>
                                    </div>

                                

                                
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"main-content\">
                        <div class=\"container-fluid\">
                            <div class=\"row clearfix\">
                                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"state\">
                                                    <h6>Bookmarks</h6>
                                                    <h2>1,410</h2>
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
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"state\">
                                                    <h6>Likes</h6>
                                                    <h2>41,410</h2>
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
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                                    <div class=\"widget\">
                                        <div class=\"widget-body\">
                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                <div class=\"state\">
                                                    <h6>Events</h6>
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
                                                    <h6>Comments</h6>
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
        {% endblock  %}
        
        

        
        <script src=\"{{ asset('admin/dist/assets/libs/jquery/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>  
        <script src=\"{{ asset('admin/dist/assets/libs/jquery/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
        <script src=\"{{ asset('admin/dist/assets/libs/metismenu/metisMenu.min.js')}}\"></script>
        <script src=\"{{ asset('admin/dist/assets/libs/simplebar/simplebar.min.js')}}\"></script>
        <script src=\"{{ asset('admin/dist/assets/libs/node-waves/waves.min.js')}}\"></script>
       
        <script src=\"{{ asset('dist/js/theme.min.js')}} \"></script>


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
       
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\SYMFONY-PROJECTS\\SchoolManagement\\templates\\base.html.twig");
    }
}
