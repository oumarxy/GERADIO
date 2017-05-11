<?php

/* ::sections_app/header.html.twig */
class __TwigTemplate_0310e2d03e0066ffb4df14c882cafc16b4ce86dec23ef5068d714c6ae8bf3f5e extends Twig_Template
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
        $__internal_14f5489ff63879bd840d6233798f805be880188dcf2c8848b67778f056c5f13d = $this->env->getExtension("native_profiler");
        $__internal_14f5489ff63879bd840d6233798f805be880188dcf2c8848b67778f056c5f13d->enter($__internal_14f5489ff63879bd840d6233798f805be880188dcf2c8848b67778f056c5f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sections_app/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_14f5489ff63879bd840d6233798f805be880188dcf2c8848b67778f056c5f13d->leave($__internal_14f5489ff63879bd840d6233798f805be880188dcf2c8848b67778f056c5f13d_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_cc58bbda5379b9825043b841504adbd6ee993249a38d1d3240e37ae874393f6d = $this->env->getExtension("native_profiler");
        $__internal_cc58bbda5379b9825043b841504adbd6ee993249a38d1d3240e37ae874393f6d->enter($__internal_cc58bbda5379b9825043b841504adbd6ee993249a38d1d3240e37ae874393f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
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
        
        $__internal_cc58bbda5379b9825043b841504adbd6ee993249a38d1d3240e37ae874393f6d->leave($__internal_cc58bbda5379b9825043b841504adbd6ee993249a38d1d3240e37ae874393f6d_prof);

    }

    public function getTemplateName()
    {
        return "::sections_app/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  64 => 21,  58 => 18,  49 => 14,  35 => 2,  23 => 1,);
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
