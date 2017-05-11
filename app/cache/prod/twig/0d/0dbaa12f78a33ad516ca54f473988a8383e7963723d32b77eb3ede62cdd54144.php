<?php

/* GestionBundle:Contrat:index.html.twig */
class __TwigTemplate_1000eb33999472510441adbc7dd2a45bd311fdb13fb6dbf744a62ba703b1593f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Contrat de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "prenomemp", array()), "html", null, true);
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
        if ( !(null === $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "path", array()))) {
            // line 15
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/" . $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "path", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "prenomemp", array()), "html", null, true);
        echo "</strong></td>
                    </tr>
                   
                    <tr>
                        <th>Activité</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "fonction", array()), "html", null, true);
        echo "</td>
                    </tr>
\t\t\t\t\t <tr>
                        <th>Email</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "emailemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "telpers", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cel</th>
                        <td> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "celemp", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_contrat"]) ? $context["form_contrat"] : null), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Contrat</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "libcontrat", array()), 'row', array("label" => "Contrat"));
        echo "
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "dateentre", array()), 'row', array("label" => "Date Entrée"));
        echo "
\t\t\t\t\t  ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "datefin", array()), 'row', array("label" => "Date Fin"));
        echo "
\t\t\t\t\t    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "numcnps", array()), 'row', array("label" => "Numero CNPS"));
        echo "
                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "datecnps", array()), 'row', array("label" => "Date CNPS"));
        echo "
\t\t\t\t\t";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "file", array()), 'row', array("label" => "Télécharger contrat"));
        echo " 
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default left\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "submit", array()), 'row', array("label" => "Confirmer"));
        echo "
                </div> 
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_contrat"]) ? $context["form_contrat"] : null), "_token", array()), 'widget');
        echo " 
                ";
        // line 110
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_contrat"]) ? $context["form_contrat"] : null), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
    ";
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
        return array (  237 => 110,  233 => 109,  228 => 107,  221 => 103,  217 => 102,  213 => 101,  209 => 100,  205 => 99,  201 => 98,  191 => 91,  185 => 87,  175 => 78,  164 => 73,  158 => 70,  154 => 69,  150 => 68,  144 => 67,  138 => 66,  134 => 65,  131 => 64,  127 => 63,  106 => 45,  98 => 40,  91 => 36,  84 => 32,  77 => 28,  67 => 23,  61 => 19,  55 => 17,  49 => 15,  47 => 14,  31 => 4,  28 => 3,  11 => 1,);
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
