<?php

/* GestionBundle:Conge:index.html.twig */
class __TwigTemplate_5eb6255b93916f37f3cfbf6d42aee5c573532d7fcd511d0a8063a10efdc08ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Conge:index.html.twig", 1);
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
        $__internal_95c4b6332efb42e0d215ddf04194df1ccc5925e0e1378c9e4c6e9e28ddc13d7e = $this->env->getExtension("native_profiler");
        $__internal_95c4b6332efb42e0d215ddf04194df1ccc5925e0e1378c9e4c6e9e28ddc13d7e->enter($__internal_95c4b6332efb42e0d215ddf04194df1ccc5925e0e1378c9e4c6e9e28ddc13d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Conge:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c4b6332efb42e0d215ddf04194df1ccc5925e0e1378c9e4c6e9e28ddc13d7e->leave($__internal_95c4b6332efb42e0d215ddf04194df1ccc5925e0e1378c9e4c6e9e28ddc13d7e_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_fa2254a1cad0591490a3141052032f252bfaab342d33543dcf41cfbb189c2c0e = $this->env->getExtension("native_profiler");
        $__internal_fa2254a1cad0591490a3141052032f252bfaab342d33543dcf41cfbb189c2c0e->enter($__internal_fa2254a1cad0591490a3141052032f252bfaab342d33543dcf41cfbb189c2c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        // line 4
        echo "    <h1>Liste des congés de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</h1>
    <button type=\"button\" class=\"produitBTN btn btn-success\" data-toggle=\"modal\" data-target=\".produit-modal-md\">Nouveau Congé</button>

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
                    <tr>
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
                        <th>Date de départ</th>
                        <th>Date de rétour</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 60
            echo "                        <tr>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datedept", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateretour", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>

                                <a class=\"btn btn-success btn-xs\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conge_pdf", array("idconge" => $this->getAttribute($context["entity"], "id", array()), "idemp" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
            echo "\" target=\"blank\">Imprimer</a>

                                <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conge_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>

                            </td> 
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </tbody>
            </table>


        </div>
    </div>




    ";
        // line 83
        echo "
    <div class=\"modal fade produit-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                ";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_conge"]) ? $context["form_conge"] : $this->getContext($context, "form_conge")), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Congé</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_conge"]) ? $context["form_conge"] : $this->getContext($context, "form_conge")), "datedept", array()), 'row', array("label" => "Date Depart"));
        echo "
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_conge"]) ? $context["form_conge"] : $this->getContext($context, "form_conge")), "dateretour", array()), 'row', array("label" => "Date Retour"));
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default left\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_conge"]) ? $context["form_conge"] : $this->getContext($context, "form_conge")), "submit", array()), 'row', array("label" => "Confirmer"));
        echo "
                </div> 
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_conge"]) ? $context["form_conge"] : $this->getContext($context, "form_conge")), "_token", array()), 'widget');
        echo " 
                ";
        // line 102
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_conge"]) ? $context["form_conge"] : $this->getContext($context, "form_conge")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_fa2254a1cad0591490a3141052032f252bfaab342d33543dcf41cfbb189c2c0e->leave($__internal_fa2254a1cad0591490a3141052032f252bfaab342d33543dcf41cfbb189c2c0e_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Conge:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 102,  209 => 101,  204 => 99,  197 => 95,  193 => 94,  183 => 87,  177 => 83,  165 => 72,  154 => 67,  149 => 65,  143 => 62,  139 => 61,  136 => 60,  132 => 59,  115 => 45,  107 => 40,  100 => 36,  93 => 32,  86 => 28,  76 => 23,  70 => 19,  64 => 17,  58 => 15,  56 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Liste des congés de {{ employe.nomemp  }} {{ employe.prenomemp  }}</h1>*/
/*     <button type="button" class="produitBTN btn btn-success" data-toggle="modal" data-target=".produit-modal-md">Nouveau Congé</button>*/
/* */
/*     <hr />*/
/*     <div class="row">*/
/*         <div class="col-md-5">*/
/*             <table class="table table-striped table-bordered">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td> */
/*                             {% if employe.path is not null %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/' ~ employe.path)}}"  width="100" height="100">*/
/*                             {% else %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/default.png')}}"  width="100" height="100">*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th> Nom Employé</th>*/
/*                         <td><strong class="text-uppercase">{{ employe.nomemp  }} {{ employe.prenomemp  }}</strong></td>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/*                         <th>Activité</th>*/
/*                         <td>{{ employe.fonction }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
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
/*             <a class="btn btn-primary " href="{{ path('employe') }}">*/
/*                 retour*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-md-7">*/
/*             <table class="table table-striped table-bordered">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Date de départ</th>*/
/*                         <th>Date de rétour</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td>{{ entity.datedept|date("d/m/Y") }}</td>*/
/*                             <td>{{ entity.dateretour|date("d/m/Y")  }}</td>*/
/*                             <td>*/
/* */
/*                                 <a class="btn btn-success btn-xs" href="{{ path('conge_pdf',{ 'idconge': entity.id ,'idemp': employe.id}) }}" target="blank">Imprimer</a>*/
/* */
/*                                 <a class="btn btn-primary btn-xs" href="{{ path('conge_edit',{ 'id': entity.id }) }}">Modifier</a>*/
/* */
/*                             </td> */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*     {# le modal de gestion de produit #}*/
/* */
/*     <div class="modal fade produit-modal-md" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-md">*/
/*             <div class="modal-content">*/
/*                 {{ form_start(form_conge) }}*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="myModalLabel2">Congé</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_row(form_conge.datedept, {'label':'Date Depart'}) }}*/
/*                     {{ form_row(form_conge.dateretour, {'label':'Date Retour'}) }}*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default left" data-dismiss="modal">Fermer</button>*/
/*                     {{form_row(form_conge.submit, { "label": "Confirmer" })}}*/
/*                 </div> */
/*                 {{ form_widget(form_conge._token) }} */
/*                 {{ form_end(form_conge, {'render_rest': false})}}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
