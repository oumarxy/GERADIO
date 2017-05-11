<?php

/* ::sections_app/main_sidebar.html.twig */
class __TwigTemplate_48a9e8060fd3c215ac3f9deb02035b6669974792fb35341b03bd3708116c436e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_sidebar' => array($this, 'block_main_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b1923fdf8c78202c77e2e366973ae85583c9444b676dcf38c024f7c04f48796 = $this->env->getExtension("native_profiler");
        $__internal_1b1923fdf8c78202c77e2e366973ae85583c9444b676dcf38c024f7c04f48796->enter($__internal_1b1923fdf8c78202c77e2e366973ae85583c9444b676dcf38c024f7c04f48796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sections_app/main_sidebar.html.twig"));

        // line 1
        $this->displayBlock('main_sidebar', $context, $blocks);
        
        $__internal_1b1923fdf8c78202c77e2e366973ae85583c9444b676dcf38c024f7c04f48796->leave($__internal_1b1923fdf8c78202c77e2e366973ae85583c9444b676dcf38c024f7c04f48796_prof);

    }

    public function block_main_sidebar($context, array $blocks = array())
    {
        $__internal_f5561fa02c92fefa7ec810e410e9ac8f973fd80184e4f864a292c524e77debf1 = $this->env->getExtension("native_profiler");
        $__internal_f5561fa02c92fefa7ec810e410e9ac8f973fd80184e4f864a292c524e77debf1->enter($__internal_f5561fa02c92fefa7ec810e410e9ac8f973fd80184e4f864a292c524e77debf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_sidebar"));

        // line 2
        echo "    <div class=\"col-md-3 left_col\">
        <div class=\"left_col scroll-view\">

            <div class=\"clearfix\"></div>

            <!-- menu prile quick info -->
            <div class=\"profile\">
                <div class=\"profile_pic\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/img/user.png"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"img-circle profile_img\">
                </div>
                <div class=\"profile_info\">
                    <span>Welcome,</span>
                    <h2> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h2>
                </div>
            </div>
            <!-- /menu prile quick info -->

            <div class=\"clearfix \">
            </div>
            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                <div class=\"menu_section\">

                    <div class=\"clearfix divider\">
                    </div>
                    <ul class=\"nav side-menu\">
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ventes_accueil");
        echo "\"><i class=\"fa fa-home\"></i> Accueil </a></li>

                        ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ventes_homepage");
            echo "\"><i class=\"fa fa-dashboard\"></i> Tableau de Bord </a></li>
                            ";
        }
        // line 33
        echo "
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\"><i class=\"fa fa-users\"></i> Gestion Clients </a></li>
                            ";
        // line 35
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COMMERCIAL"))) {
            // line 36
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("proforma");
            echo "\"><i class=\"fa fa-circle-o\"></i>Proforma </a></li>
                            ";
        }
        // line 38
        echo "                            ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COMPTABLE"))) {
            // line 39
            echo "                            <li><a><i class=\"fa fa-circle\"></i> Gestion Entrée/Sortie </a>
                                <ul class=\"nav child_menu\" style=\"display: none\">
                                    <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("operation");
            echo "\" >Liste Opérations </a></li>
                                    <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("operation_new");
            echo "\" >Ajouter Opération</a></li>
                                    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("operation_journal_caisse");
            echo "\" >Jounal de caisse</a></li>

                                </ul>
                            </li>
                        ";
        }
        // line 48
        echo "                        ";
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COMMERCIAL"))) {
            // line 49
            echo "                            <li><a> <i class=\"fa fa-cubes\"></i>Nos Catégories  <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"display: none\">
                                    <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("categorieproduit");
            echo "\" >Liste catégories </a></li>
                                    <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("categorieproduit_new");
            echo "\" >Ajouter catégorie</a></li>

                                </ul>
                            </li>
                            
                        ";
        }
        // line 58
        echo "                         ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("employe");
            echo "\"> <i class=\"fa fa-user\"></i> Employés </a></li>
                        ";
        }
        // line 61
        echo "                            <li><a><i class=\"fa fa-history\"></i> Historiques<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"display: none\">
                                    <li>
                                        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("facture_all");
        echo "\">Factures</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("encaissement_all");
        echo "\">Encaissements</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("proforma_all");
        echo "\">Proforma</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
                ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "                    <div class=\"menu_section\">
                        <h3><i class=\"fa fa-cogs\"></i>Configurations</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-users\"></i> Apporteurs <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"display: none\">
                                    <li><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("apporteur");
            echo "\">Liste apporteurs</a>
                                    </li>
                                    <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("apporteur_new");
            echo "\" >Nouvel apporteur</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-users\"></i> Utilisateurs <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"display: none\">
                                    <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("account");
            echo "\">Liste utilisateurs</a>
                                    </li>
                                    <li><a href=\"";
            // line 92
            echo $this->env->getExtension('routing')->getPath("account_new");
            echo "\" >Nouvel utilisateur</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-bullseye\"></i> Catégories clients <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"display: none\">
                                    <li><a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("categorieclient");
            echo "\">Liste catégories</a>
                                    </li>
                                    <li><a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("categorieclient_new");
            echo "\" >Ajouter catégorie</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-cog\"></i> Parametres<span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"display: none\">
                                    <li><a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("fonction");
            echo "\">Fonction</a>
                                    </li>
                                    <li><a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("service");
            echo "\">Service</a>
                                    </li>
                                    <li><a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("grade");
            echo "\">Grade</a>
                                    </li>
                                    <li><a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("etude");
            echo "\">Etude</a>
                                    </li>
                                    <li><a href=\"";
            // line 118
            echo $this->env->getExtension('routing')->getPath("directeur");
            echo "\">Directeur</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                ";
        }
        // line 126
        echo "            </div>
            <!-- /sidebar menu -->


        </div>
    </div>


";
        
        $__internal_f5561fa02c92fefa7ec810e410e9ac8f973fd80184e4f864a292c524e77debf1->leave($__internal_f5561fa02c92fefa7ec810e410e9ac8f973fd80184e4f864a292c524e77debf1_prof);

    }

    public function getTemplateName()
    {
        return "::sections_app/main_sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  261 => 126,  250 => 118,  245 => 116,  240 => 114,  235 => 112,  230 => 110,  219 => 102,  214 => 100,  203 => 92,  198 => 90,  189 => 84,  184 => 82,  177 => 77,  175 => 76,  166 => 70,  160 => 67,  154 => 64,  149 => 61,  143 => 59,  140 => 58,  131 => 52,  127 => 51,  123 => 49,  120 => 48,  112 => 43,  108 => 42,  104 => 41,  100 => 39,  97 => 38,  91 => 36,  89 => 35,  85 => 34,  82 => 33,  76 => 31,  74 => 30,  69 => 28,  52 => 14,  45 => 10,  35 => 2,  23 => 1,);
    }
}
/* {% block main_sidebar %}*/
/*     <div class="col-md-3 left_col">*/
/*         <div class="left_col scroll-view">*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*             <!-- menu prile quick info -->*/
/*             <div class="profile">*/
/*                 <div class="profile_pic">*/
/*                     <img src="{{asset('design/dist/img/user.png')}}" alt="avatar" class="img-circle profile_img">*/
/*                 </div>*/
/*                 <div class="profile_info">*/
/*                     <span>Welcome,</span>*/
/*                     <h2> {{app.user.username}}</h2>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /menu prile quick info -->*/
/* */
/*             <div class="clearfix ">*/
/*             </div>*/
/*             <!-- sidebar menu -->*/
/*             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*                 <div class="menu_section">*/
/* */
/*                     <div class="clearfix divider">*/
/*                     </div>*/
/*                     <ul class="nav side-menu">*/
/*                         <li><a href="{{path('ventes_accueil')}}"><i class="fa fa-home"></i> Accueil </a></li>*/
/* */
/*                         {% if is_granted('ROLE_ADMIN')  %}*/
/*                             <li><a href="{{path('ventes_homepage')}}"><i class="fa fa-dashboard"></i> Tableau de Bord </a></li>*/
/*                             {% endif  %}*/
/* */
/*                         <li><a href="{{path('client')}}"><i class="fa fa-users"></i> Gestion Clients </a></li>*/
/*                             {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_COMMERCIAL')  %}*/
/*                             <li><a href="{{path('proforma')}}"><i class="fa fa-circle-o"></i>Proforma </a></li>*/
/*                             {% endif  %}*/
/*                             {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_COMPTABLE')  %}*/
/*                             <li><a><i class="fa fa-circle"></i> Gestion Entrée/Sortie </a>*/
/*                                 <ul class="nav child_menu" style="display: none">*/
/*                                     <li><a href="{{path('operation')}}" >Liste Opérations </a></li>*/
/*                                     <li><a href="{{path('operation_new')}}" >Ajouter Opération</a></li>*/
/*                                     <li><a href="{{path('operation_journal_caisse')}}" >Jounal de caisse</a></li>*/
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                         {% endif  %}*/
/*                         {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_COMMERCIAL')  %}*/
/*                             <li><a> <i class="fa fa-cubes"></i>Nos Catégories  <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="nav child_menu" style="display: none">*/
/*                                     <li><a href="{{path('categorieproduit')}}" >Liste catégories </a></li>*/
/*                                     <li><a href="{{path('categorieproduit_new')}}" >Ajouter catégorie</a></li>*/
/* */
/*                                 </ul>*/
/*                             </li>*/
/*                             */
/*                         {% endif  %}*/
/*                          {% if is_granted('ROLE_ADMIN') %}*/
/*                             <li><a href="{{path('employe')}}"> <i class="fa fa-user"></i> Employés </a></li>*/
/*                         {% endif  %}*/
/*                             <li><a><i class="fa fa-history"></i> Historiques<span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="nav child_menu" style="display: none">*/
/*                                     <li>*/
/*                                         <a href="{{path('facture_all')}}">Factures</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path('encaissement_all')}}">Encaissements</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{path('proforma_all')}}">Proforma</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 {% if is_granted('ROLE_ADMIN') %}*/
/*                     <div class="menu_section">*/
/*                         <h3><i class="fa fa-cogs"></i>Configurations</h3>*/
/*                         <ul class="nav side-menu">*/
/*                             <li><a><i class="fa fa-users"></i> Apporteurs <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="nav child_menu" style="display: none">*/
/*                                     <li><a href="{{path('apporteur')}}">Liste apporteurs</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{path('apporteur_new')}}" >Nouvel apporteur</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a><i class="fa fa-users"></i> Utilisateurs <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="nav child_menu" style="display: none">*/
/*                                     <li><a href="{{path('account')}}">Liste utilisateurs</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{path('account_new')}}" >Nouvel utilisateur</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <ul class="nav side-menu">*/
/*                             <li><a><i class="fa fa-bullseye"></i> Catégories clients <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="nav child_menu" style="display: none">*/
/*                                     <li><a href="{{path('categorieclient')}}">Liste catégories</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{path('categorieclient_new')}}" >Ajouter catégorie</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <ul class="nav side-menu">*/
/*                             <li><a><i class="fa fa-cog"></i> Parametres<span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="nav child_menu" style="display: none">*/
/*                                     <li><a href="{{path('fonction')}}">Fonction</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{path('service')}}">Service</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{path('grade')}}">Grade</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{path('etude')}}">Etude</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{path('directeur')}}">Directeur</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/*                     </div>*/
/*                 {% endif  %}*/
/*             </div>*/
/*             <!-- /sidebar menu -->*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock main_sidebar %}*/
