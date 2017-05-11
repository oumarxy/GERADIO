<?php

/* VentesBundle:Operation:show.html.twig */
class __TwigTemplate_22eebc579f3fa6cbc823ce7a46266a98467aac6e2c419abed263c0b3d2930cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Operation:show.html.twig", 1);
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
        $__internal_1d7fd47cf56da2d16a707ce34f45ab1154db9c291fa7e862a6ea24036972aa1f = $this->env->getExtension("native_profiler");
        $__internal_1d7fd47cf56da2d16a707ce34f45ab1154db9c291fa7e862a6ea24036972aa1f->enter($__internal_1d7fd47cf56da2d16a707ce34f45ab1154db9c291fa7e862a6ea24036972aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Operation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d7fd47cf56da2d16a707ce34f45ab1154db9c291fa7e862a6ea24036972aa1f->leave($__internal_1d7fd47cf56da2d16a707ce34f45ab1154db9c291fa7e862a6ea24036972aa1f_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_23f0dbab8622aa5c7e1d5906c67dbba2d1a1c9f0c1631c28f871a0923fd5d0d7 = $this->env->getExtension("native_profiler");
        $__internal_23f0dbab8622aa5c7e1d5906c67dbba2d1a1c9f0c1631c28f871a0923fd5d0d7->enter($__internal_23f0dbab8622aa5c7e1d5906c67dbba2d1a1c9f0c1631c28f871a0923fd5d0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        // line 4
        echo "    <h3>Opération</h3>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <table class=\"table table-striped table-hover\">
                <tbody>
                    <tr>
                        <th>Flux</th>
                        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "flux", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nature</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nature", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fonction</th>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fonctionpersonres", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephone", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Montant</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montant", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>";
        // line 35
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateOperation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateOperation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                    </tr>
                </tbody>
            </table>
                     <a class=\"btn btn-primary\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("operation");
        echo "\">
            Retour
        </a>
        <a  class=\"btn btn-success\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Modifier
        </a>
        <a  class=\"btn btn-success\" target=\"_blank\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_bon_caisse", array("idop" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-file-pdf-o\"></i>  Générer
        </a>
        </div>
        <div class=\"col-md-8\">
            <div class=\"page-header\">
                Motif: ";
        // line 51
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array())), "html", null, true);
        echo "
            </div>
            <div class=\"panel-body\">
                <div class=\"panel-title\">
                    Description:
                </div>
                <div class=\"panel-body panel panel-primary\">

                    ";
        // line 59
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
                </div>
            </div>
        </div>

       

    ";
        
        $__internal_23f0dbab8622aa5c7e1d5906c67dbba2d1a1c9f0c1631c28f871a0923fd5d0d7->leave($__internal_23f0dbab8622aa5c7e1d5906c67dbba2d1a1c9f0c1631c28f871a0923fd5d0d7_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Operation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 59,  121 => 51,  112 => 45,  106 => 42,  100 => 39,  91 => 35,  84 => 31,  77 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %}*/
/*     <h3>Opération</h3>*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <table class="table table-striped table-hover">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>Flux</th>*/
/*                         <td>{{ entity.flux }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Nature</th>*/
/*                         <td>{{ entity.nature }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Nom</th>*/
/*                         <td>{{ entity.nom }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Fonction</th>*/
/*                         <td>{{ entity.fonctionpersonres }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Téléphone</th>*/
/*                         <td>{{ entity.telephone }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Montant</th>*/
/*                         <td>{{ entity.montant }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Date</th>*/
/*                         <td>{% if entity.dateOperation %}{{ entity.dateOperation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*                      <a class="btn btn-primary" href="{{ path('operation') }}">*/
/*             Retour*/
/*         </a>*/
/*         <a  class="btn btn-success" href="{{ path('operation_edit', { 'id': entity.id }) }}">*/
/*             Modifier*/
/*         </a>*/
/*         <a  class="btn btn-success" target="_blank" href="{{ path('operation_bon_caisse', {'idop': entity.id }) }}">*/
/*             <i class="fa fa-file-pdf-o"></i>  Générer*/
/*         </a>*/
/*         </div>*/
/*         <div class="col-md-8">*/
/*             <div class="page-header">*/
/*                 Motif: {{ entity.libelle|capitalize }}*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="panel-title">*/
/*                     Description:*/
/*                 </div>*/
/*                 <div class="panel-body panel panel-primary">*/
/* */
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*        */
/* */
/*     {% endblock %}*/
/* */
