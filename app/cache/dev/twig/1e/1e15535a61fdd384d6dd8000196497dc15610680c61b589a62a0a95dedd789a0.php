<?php

/* GestionBundle:Banque:edit.html.twig */
class __TwigTemplate_45da9751d1cacb5e46f06681e198ae6f513ffda8cd94daa0ee9967562f331f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Banque:edit.html.twig", 1);
        $this->blocks = array(
            'container_gestion' => array($this, 'block_container_gestion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionBundle::layout_gestion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0231a3f4fb240f9f4b0ecc3e17cfdc05027221d00dd953385e305b7b000cd560 = $this->env->getExtension("native_profiler");
        $__internal_0231a3f4fb240f9f4b0ecc3e17cfdc05027221d00dd953385e305b7b000cd560->enter($__internal_0231a3f4fb240f9f4b0ecc3e17cfdc05027221d00dd953385e305b7b000cd560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Banque:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0231a3f4fb240f9f4b0ecc3e17cfdc05027221d00dd953385e305b7b000cd560->leave($__internal_0231a3f4fb240f9f4b0ecc3e17cfdc05027221d00dd953385e305b7b000cd560_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_dd89fc7fbb1af6fa7fd4d0efdbb8a72b4c47b1f5b60ea0de828d4f23d18eb21f = $this->env->getExtension("native_profiler");
        $__internal_dd89fc7fbb1af6fa7fd4d0efdbb8a72b4c47b1f5b60ea0de828d4f23d18eb21f->enter($__internal_dd89fc7fbb1af6fa7fd4d0efdbb8a72b4c47b1f5b60ea0de828d4f23d18eb21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        // line 4
        echo "    <h3>Modification Banque</h3>
<div class=\"row\">
    <div class=\"col-md-4\">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
 </div> 
</div>
<a class=\"btn btn-primary\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque", array("idemp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "id", array()))), "html", null, true);
        echo "\">
            Retour
        </a>

";
        
        $__internal_dd89fc7fbb1af6fa7fd4d0efdbb8a72b4c47b1f5b60ea0de828d4f23d18eb21f->leave($__internal_dd89fc7fbb1af6fa7fd4d0efdbb8a72b4c47b1f5b60ea0de828d4f23d18eb21f_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Banque:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h3>Modification Banque</h3>*/
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*     {{ form(edit_form) }}*/
/*  </div> */
/* </div>*/
/* <a class="btn btn-primary" href="{{ path('banque', { 'idemp': entity.employe.id }) }}">*/
/*             Retour*/
/*         </a>*/
/* */
/* {% endblock %}*/
/* */
