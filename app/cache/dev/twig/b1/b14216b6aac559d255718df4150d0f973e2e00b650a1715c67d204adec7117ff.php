<?php

/* @Ventes/Home/accueil.html.twig */
class __TwigTemplate_6e9f0d6575ea1bab9e8c4777fbcc1164411419b1bdae3b4d4b8e6bd0873931d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "@Ventes/Home/accueil.html.twig", 1);
        $this->blocks = array(
            'container_ventes' => array($this, 'block_container_ventes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VentesBundle::layout_ventes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8464a4b5e4ad0c202292b7d09be93f0d2259afbb2933d22675bce828fbf2d27a = $this->env->getExtension("native_profiler");
        $__internal_8464a4b5e4ad0c202292b7d09be93f0d2259afbb2933d22675bce828fbf2d27a->enter($__internal_8464a4b5e4ad0c202292b7d09be93f0d2259afbb2933d22675bce828fbf2d27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ventes/Home/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8464a4b5e4ad0c202292b7d09be93f0d2259afbb2933d22675bce828fbf2d27a->leave($__internal_8464a4b5e4ad0c202292b7d09be93f0d2259afbb2933d22675bce828fbf2d27a_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_3e559f5dab416af977b07c18fb525a2458cde5a5a3b4f949bcaf03baa9db509f = $this->env->getExtension("native_profiler");
        $__internal_3e559f5dab416af977b07c18fb525a2458cde5a5a3b4f949bcaf03baa9db509f->enter($__internal_3e559f5dab416af977b07c18fb525a2458cde5a5a3b4f949bcaf03baa9db509f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        echo " 
    <style type=\"text/css\">
        .right_col {
            min-height: 650px !important;
        }
    </style>
    <div >
        <img style=\"width: 100%; height: 100%;\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/img/geradio.png"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"image\">
    </div> 
";
        
        $__internal_3e559f5dab416af977b07c18fb525a2458cde5a5a3b4f949bcaf03baa9db509f->leave($__internal_3e559f5dab416af977b07c18fb525a2458cde5a5a3b4f949bcaf03baa9db509f_prof);

    }

    public function getTemplateName()
    {
        return "@Ventes/Home/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %} */
/*     <style type="text/css">*/
/*         .right_col {*/
/*             min-height: 650px !important;*/
/*         }*/
/*     </style>*/
/*     <div >*/
/*         <img style="width: 100%; height: 100%;" src="{{asset('design/dist/img/geradio.png')}}" alt="avatar" class="image">*/
/*     </div> */
/* {% endblock %}*/
/* */
