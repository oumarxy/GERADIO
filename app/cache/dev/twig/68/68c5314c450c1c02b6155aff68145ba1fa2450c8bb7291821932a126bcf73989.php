<?php

/* GestionBundle:Contrat:show.html.twig */
class __TwigTemplate_d7abbcaafb215b6b3b24a01cd7ee0a3e3dbe6c5b9f9df19c2414a452b5b17026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Contrat:show.html.twig", 1);
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
        $__internal_2fce940657ecc10788510617846ee0f8de9bc615d64732f593710966ce4e096a = $this->env->getExtension("native_profiler");
        $__internal_2fce940657ecc10788510617846ee0f8de9bc615d64732f593710966ce4e096a->enter($__internal_2fce940657ecc10788510617846ee0f8de9bc615d64732f593710966ce4e096a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Contrat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fce940657ecc10788510617846ee0f8de9bc615d64732f593710966ce4e096a->leave($__internal_2fce940657ecc10788510617846ee0f8de9bc615d64732f593710966ce4e096a_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_9770ead0c070cfb523a30db5a4cc9cbf17a5c1d1e888f4b81c1fc25fe798eab4 = $this->env->getExtension("native_profiler");
        $__internal_9770ead0c070cfb523a30db5a4cc9cbf17a5c1d1e888f4b81c1fc25fe798eab4->enter($__internal_9770ead0c070cfb523a30db5a4cc9cbf17a5c1d1e888f4b81c1fc25fe798eab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        // line 4
        echo "    <h1>Contrat</h1>

<div class=\"row\">
        <div class=\"col-md-5\">
    <table class=\"table table-striped table-bordered\">
        <tbody>
            
            <tr>
                <th>Type de contrat</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libcontrat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date entre</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateentre", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date fin</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datefin", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero cnps</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numcnps", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de cnps</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecnps", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr>
                <th>Voir contrat</th>
                <td><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/contrats/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path", array()))), "html", null, true);
        echo "\" target=\"blank\"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
 <a class=\"btn btn-success \"  href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contrat", array("idemp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "employe", array()), "id", array()))), "html", null, true);
        echo "\">
           Retour
        </a>
";
        
        $__internal_9770ead0c070cfb523a30db5a4cc9cbf17a5c1d1e888f4b81c1fc25fe798eab4->leave($__internal_9770ead0c070cfb523a30db5a4cc9cbf17a5c1d1e888f4b81c1fc25fe798eab4_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Contrat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  86 => 33,  79 => 29,  72 => 25,  65 => 21,  58 => 17,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Contrat</h1>*/
/* */
/* <div class="row">*/
/*         <div class="col-md-5">*/
/*     <table class="table table-striped table-bordered">*/
/*         <tbody>*/
/*             */
/*             <tr>*/
/*                 <th>Type de contrat</th>*/
/*                 <td>{{ entity.libcontrat }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date entre</th>*/
/*                 <td>{{ entity.dateentre|date("d/m/Y") }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date fin</th>*/
/*                 <td>{{ entity.datefin|date("d/m/Y") }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Numero cnps</th>*/
/*                 <td>{{ entity.numcnps }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Date de cnps</th>*/
/*                 <td>{{ entity.datecnps|date("d/m/Y") }}</td>*/
/*             </tr>*/
/* 			<tr>*/
/*                 <th>Voir contrat</th>*/
/*                 <td><a href="{{ asset('uploads/contrats/' ~ entity.path) }}" target="blank"></td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* </div>*/
/*  <a class="btn btn-success "  href="{{ path('contrat', { 'idemp': entity.employe.id }) }}">*/
/*            Retour*/
/*         </a>*/
/* {% endblock %}*/
/* */
