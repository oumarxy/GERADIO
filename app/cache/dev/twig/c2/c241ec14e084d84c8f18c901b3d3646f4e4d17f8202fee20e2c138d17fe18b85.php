<?php

/* GestionBundle:Contrat:index.html.twig */
class __TwigTemplate_c619f7c139e01ed1e6e9cf0d2c54f2e11a0ccc55c6118bcc2ac431947f6f8193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Contrat:index.html.twig", 1);
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
        $__internal_0b2deacbb521ca347d14d3f1626b298bb161d394eaa6612b8f28c5cbca2c61bf = $this->env->getExtension("native_profiler");
        $__internal_0b2deacbb521ca347d14d3f1626b298bb161d394eaa6612b8f28c5cbca2c61bf->enter($__internal_0b2deacbb521ca347d14d3f1626b298bb161d394eaa6612b8f28c5cbca2c61bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Contrat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2deacbb521ca347d14d3f1626b298bb161d394eaa6612b8f28c5cbca2c61bf->leave($__internal_0b2deacbb521ca347d14d3f1626b298bb161d394eaa6612b8f28c5cbca2c61bf_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_8995e5d5d1fab40fbb396ab712b42c5cf40c44a3051661641dc614d2f02fcf8e = $this->env->getExtension("native_profiler");
        $__internal_8995e5d5d1fab40fbb396ab712b42c5cf40c44a3051661641dc614d2f02fcf8e->enter($__internal_8995e5d5d1fab40fbb396ab712b42c5cf40c44a3051661641dc614d2f02fcf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        // line 4
        echo "    <h1>Contrat de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</h1>
   <button type=\"button\" class=\"contratBTN btn btn-success\" data-toggle=\"modal\" data-target=\".contrat-modal-md\">Nouveau Contrat</button>

    <hr />
    <div class=\"row\">
        <div class=\"col-md-5\">
            <table class=\"table table-striped table-bordered\">
                <tbody>
                     <tr>
                        <td> 
                              ";
        // line 14
        if ( !(null === $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "path", array()))) {
            // line 15
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/" . $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "path", array()))), "html", null, true);
            echo "\"  width=\"100\" height=\"100\">
                            ";
        } else {
            // line 17
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profiles/default.png"), "html", null, true);
            echo "\"  width=\"100\" height=\"100\">
                            ";
        }
        // line 19
        echo "                        </td>
                     </tr>
                    <tr>
                        <th> Nom Employé</th>
                        <td><strong class=\"text-uppercase\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</strong></td>
                    </tr>
                   
                    <tr>
                        <th>Activité</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "fonction", array()), "html", null, true);
        echo "</td>
                    </tr>
\t\t\t\t\t <tr>
                        <th>Email</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "emailemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "telpers", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cel</th>
                        <td> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "celemp", array()), "html", null, true);
        echo "</td>
                    </tr>

                </tbody>
            </table>
             <a class=\"btn btn-primary \" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("employe");
        echo "\">
                                 retour
                            </a>
        </div>
<div class=\"col-md-7\">
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Type de contrat</th>
                <th>Date d'entrée</th>
                <th>Date de fin</th>
                <th>Numero cnps</th>
                <th>Date cnps</th>
\t\t\t\t<th>Voir contrat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 64
            echo "            <tr>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libcontrat", array()), "html", null, true);
            echo "</td>
                <td>  ";
            // line 66
            if ($this->getAttribute($context["entity"], "dateentre", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateentre", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 67
            if ($this->getAttribute($context["entity"], "datefin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datefin", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numcnps", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datecnps", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/contrats/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\" target=\"blank\"><i class=\"fa fa-eye\"></i> Contrat</a></td>
                <td>
                
                        <a class=\"btn btn-success btn-xs\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contrat_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">modifier</a>
                   
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
    </table>

\t  </div>
    </div>
\t
\t
\t
\t";
        // line 87
        echo "
    <div class=\"modal fade contrat-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Contrat</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "libcontrat", array()), 'row', array("label" => "Contrat"));
        echo "
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "dateentre", array()), 'row', array("label" => "Date Entrée"));
        echo "
\t\t\t\t\t  ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "datefin", array()), 'row', array("label" => "Date Fin"));
        echo "
\t\t\t\t\t    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "numcnps", array()), 'row', array("label" => "Numero CNPS"));
        echo "
                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "datecnps", array()), 'row', array("label" => "Date CNPS"));
        echo "
\t\t\t\t\t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "file", array()), 'row', array("label" => "Télécharger contrat"));
        echo " 
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default left\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "submit", array()), 'row', array("label" => "Confirmer"));
        echo "
                </div> 
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), "_token", array()), 'widget');
        echo " 
                ";
        // line 110
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_contrat"]) ? $context["form_contrat"] : $this->getContext($context, "form_contrat")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
    ";
        
        $__internal_8995e5d5d1fab40fbb396ab712b42c5cf40c44a3051661641dc614d2f02fcf8e->leave($__internal_8995e5d5d1fab40fbb396ab712b42c5cf40c44a3051661641dc614d2f02fcf8e_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Contrat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 110,  242 => 109,  237 => 107,  230 => 103,  226 => 102,  222 => 101,  218 => 100,  214 => 99,  210 => 98,  200 => 91,  194 => 87,  184 => 78,  173 => 73,  167 => 70,  163 => 69,  159 => 68,  153 => 67,  147 => 66,  143 => 65,  140 => 64,  136 => 63,  115 => 45,  107 => 40,  100 => 36,  93 => 32,  86 => 28,  76 => 23,  70 => 19,  64 => 17,  58 => 15,  56 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Contrat de {{ employe.nomemp  }} {{ employe.prenomemp  }}</h1>*/
/*    <button type="button" class="contratBTN btn btn-success" data-toggle="modal" data-target=".contrat-modal-md">Nouveau Contrat</button>*/
/* */
/*     <hr />*/
/*     <div class="row">*/
/*         <div class="col-md-5">*/
/*             <table class="table table-striped table-bordered">*/
/*                 <tbody>*/
/*                      <tr>*/
/*                         <td> */
/*                               {% if employe.path is not null %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/' ~ employe.path)}}"  width="100" height="100">*/
/*                             {% else %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/default.png')}}"  width="100" height="100">*/
/*                             {% endif %}*/
/*                         </td>*/
/*                      </tr>*/
/*                     <tr>*/
/*                         <th> Nom Employé</th>*/
/*                         <td><strong class="text-uppercase">{{ employe.nomemp  }} {{ employe.prenomemp  }}</strong></td>*/
/*                     </tr>*/
/*                    */
/*                     <tr>*/
/*                         <th>Activité</th>*/
/*                         <td>{{ employe.fonction }}</td>*/
/*                     </tr>*/
/* 					 <tr>*/
/*                         <th>Email</th>*/
/*                         <td>{{ employe.emailemp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Téléphone</th>*/
/*                         <td>{{ employe.telpers }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Cel</th>*/
/*                         <td> {{ employe.celemp }}</td>*/
/*                     </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*              <a class="btn btn-primary " href="{{ path('employe') }}">*/
/*                                  retour*/
/*                             </a>*/
/*         </div>*/
/* <div class="col-md-7">*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Type de contrat</th>*/
/*                 <th>Date d'entrée</th>*/
/*                 <th>Date de fin</th>*/
/*                 <th>Numero cnps</th>*/
/*                 <th>Date cnps</th>*/
/* 				<th>Voir contrat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.libcontrat }}</td>*/
/*                 <td>  {% if entity.dateentre %}{{ entity.dateentre|date("d/m/Y")}}{% endif %}</td>*/
/*                 <td>{% if entity.datefin %}{{ entity.datefin|date("d/m/Y")}}{% endif %}</td>*/
/*                 <td>{{ entity.numcnps}}</td>*/
/*                 <td>{{ entity.datecnps|date("d/m/Y") }}</td>*/
/* 				<td><a href="{{ asset('uploads/contrats/' ~ entity.path) }}" target="blank"><i class="fa fa-eye"></i> Contrat</a></td>*/
/*                 <td>*/
/*                 */
/*                         <a class="btn btn-success btn-xs" href="{{ path('contrat_edit', { 'id': entity.id }) }}">modifier</a>*/
/*                    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* 	  </div>*/
/*     </div>*/
/* 	*/
/* 	*/
/* 	*/
/* 	{# le modal de gestion de contrat #}*/
/* */
/*     <div class="modal fade contrat-modal-md" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-md">*/
/*             <div class="modal-content">*/
/*                 {{ form_start(form_contrat) }}*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="myModalLabel2">Contrat</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_row(form_contrat.libcontrat, {'label':'Contrat'}) }}*/
/*                     {{ form_row(form_contrat.dateentre, {'label':'Date Entrée'}) }}*/
/* 					  {{ form_row(form_contrat.datefin, {'label':'Date Fin'}) }}*/
/* 					    {{ form_row(form_contrat.numcnps, {'label':'Numero CNPS'}) }}*/
/*                     {{ form_row(form_contrat.datecnps, {'label':'Date CNPS'}) }}*/
/* 					{{ form_row(form_contrat.file,{'label':'Télécharger contrat'}) }} */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default left" data-dismiss="modal">Fermer</button>*/
/*                     {{form_row(form_contrat.submit, { "label": "Confirmer" })}}*/
/*                 </div> */
/*                 {{ form_widget(form_contrat._token) }} */
/*                 {{ form_end(form_contrat, {'render_rest': false})}}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
