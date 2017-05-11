<?php

/* GestionBundle:Contrat:edit.html.twig */
class __TwigTemplate_1e3e160346aa71b372c28c374729f7a9644326fd1f9334a74f18d2beab1c73a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Contrat:edit.html.twig", 1);
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
        $__internal_406d3b3689213a1922353e7cfcf87c488b1593be0a7512875c8c76d4724e6d17 = $this->env->getExtension("native_profiler");
        $__internal_406d3b3689213a1922353e7cfcf87c488b1593be0a7512875c8c76d4724e6d17->enter($__internal_406d3b3689213a1922353e7cfcf87c488b1593be0a7512875c8c76d4724e6d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Contrat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406d3b3689213a1922353e7cfcf87c488b1593be0a7512875c8c76d4724e6d17->leave($__internal_406d3b3689213a1922353e7cfcf87c488b1593be0a7512875c8c76d4724e6d17_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_d43a6b60eda44ec7d997d3451040682ea4f0cc119ac570b4897e035ecfc660f7 = $this->env->getExtension("native_profiler");
        $__internal_d43a6b60eda44ec7d997d3451040682ea4f0cc119ac570b4897e035ecfc660f7->enter($__internal_d43a6b60eda44ec7d997d3451040682ea4f0cc119ac570b4897e035ecfc660f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        // line 4
        echo "    <h1>Modification Contrat </h1>
<div class=\"row\">
    <div class=\"col-md-4\">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
   </div>
</div>

<a class=\"btn btn-primary\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contrat", array("idemp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "id", array()))), "html", null, true);
        echo "\">
            Retour
        </a>

";
        
        $__internal_d43a6b60eda44ec7d997d3451040682ea4f0cc119ac570b4897e035ecfc660f7->leave($__internal_d43a6b60eda44ec7d997d3451040682ea4f0cc119ac570b4897e035ecfc660f7_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Contrat:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Modification Contrat </h1>*/
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*     {{ form(edit_form) }}*/
/*    </div>*/
/* </div>*/
/* */
/* <a class="btn btn-primary" href="{{ path('contrat', { 'idemp': entity.employe.id }) }}">*/
/*             Retour*/
/*         </a>*/
/* */
/* {% endblock %}*/
/* */
