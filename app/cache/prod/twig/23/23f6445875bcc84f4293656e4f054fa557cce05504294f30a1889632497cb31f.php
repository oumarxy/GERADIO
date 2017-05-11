<?php

/* ::sections_app/header.html.twig */
class __TwigTemplate_0a08aba8733d2a629e2cde6a17e2ee12ecdb0590a6841782abbc4c319ac20b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "  <!-- top navigation -->
                <div class=\"top_nav\">

                    <div class=\"nav_menu\">
                        <nav class=\"\" role=\"navigation\">
                            <div class=\"nav toggle\">
                                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                            </div>

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"\">
                                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/img/user.png"), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo " 
                                        <span class=\" fa fa-angle-down\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">  Profil </a>
                                        </li>
                                      
                                        <li><a href=\"#\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "</a>
                                        </li>
                                       
                                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Déconnexion</a>
                                        </li> 
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->
";
    }

    public function getTemplateName()
    {
        return "::sections_app/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  55 => 21,  49 => 18,  40 => 14,  26 => 2,  20 => 1,);
    }
}
/* {% block header %}*/
/*   <!-- top navigation -->*/
/*                 <div class="top_nav">*/
/* */
/*                     <div class="nav_menu">*/
/*                         <nav class="" role="navigation">*/
/*                             <div class="nav toggle">*/
/*                                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*                             </div>*/
/* */
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 <li class="">*/
/*                                     <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                                         <img src="{{asset('design/dist/img/user.png')}}" alt="">{{app.user.username}} */
/*                                         <span class=" fa fa-angle-down"></span>*/
/*                                     </a>*/
/*                                     <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                                         <li><a href="{{path('fos_user_profile_show')}}">  Profil </a>*/
/*                                         </li>*/
/*                                       */
/*                                         <li><a href="#">{{app.user.email}}</a>*/
/*                                         </li>*/
/*                                        */
/*                                         <li><a href="{{path('fos_user_security_logout')}}"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a>*/
/*                                         </li> */
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- /top navigation -->*/
/* {% endblock header %}*/
