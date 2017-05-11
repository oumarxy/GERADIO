<?php

/* GestionBundle:Banque:new.html.twig */
class __TwigTemplate_605181632f3a8a2b74f106ccf282185b96c32ae9f16071e7ac3fe1bce1f84e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Banque:new.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Validation de salaire</h1>
 <div class=\"row\">
      <div class=\"col-md-6\">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "salairecompoTable", array()), 'row');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
      </div>
\t </div> 
        
        <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque", array("idemp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "employe", array()), "id", array()))), "html", null, true);
        echo "\">
            Back to the list
        </a>
   
";
    }

    public function getTemplateName()
    {
        return "GestionBundle:Banque:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Validation de salaire</h1>*/
/*  <div class="row">*/
/*       <div class="col-md-6">*/
/*     {{ form_start(form) }}*/
/*     {{ form_row(form.salairecompoTable) }}*/
/*     {{ form_end(form) }}*/
/*       </div>*/
/* 	 </div> */
/*         */
/*         <a class="btn btn-primary" href="{{ path('banque', { 'idemp': entity.employe.id }) }}">*/
/*             Back to the list*/
/*         </a>*/
/*    */
/* {% endblock %}*/
/* */
