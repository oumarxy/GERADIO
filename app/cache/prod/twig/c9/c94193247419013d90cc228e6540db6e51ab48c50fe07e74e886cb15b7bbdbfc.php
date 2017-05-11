<?php

/* GestionBundle:Banque:index.html.twig */
class __TwigTemplate_23139e82d28e24fbc20d52bf21482dc4e2da5c7ed77fd408d262192fdc172bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Banque:index.html.twig", 1);
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
        echo "    <h1>Gestion du Salaire </h1>

    <hr />
    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table table-striped table-bordered\">
                <tbody>
                    <tr>
                        <td> 
                            ";
        // line 13
        if ( !(null === $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "path", array()))) {
            // line 14
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/" . $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "path", array()))), "html", null, true);
            echo "\"  width=\"100\" height=\"100\">
                            ";
        } else {
            // line 16
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profiles/default.png"), "html", null, true);
            echo "\"  width=\"100\" height=\"100\">
                            ";
        }
        // line 18
        echo "                        </td>
                    </tr>
                    <tr>
                        <th> Nom Employé</th>
                        <td><strong class=\"text-uppercase\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "prenomemp", array()), "html", null, true);
        echo "</strong></td>
                    </tr>

                    <tr>
                        <th>Activité</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "fonction", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "emailemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "telpers", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cellulaire</th>
                        <td> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "celemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Salaire de base</th>
                        <td> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "salbase", array()), "html", null, true);
        echo "</td>
                    </tr>

                </tbody>
            </table>
           
        </div>
        <div class=\"col-md-6\">
            <button type=\"button\" class=\"salaireBTN btn btn-success\" data-toggle=\"modal\" data-target=\".salaire-modal-md\">Nouvelle composante</button>
            <form name=\"salaire\" method=\"post\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("salaire_employe_creation", array("idemp" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : null), "id", array()))), "html", null, true);
        echo "\">
                <table class=\"table table-striped responsive-utilities jambo_table bulk_action\">
                    ";
        // line 54
        $context["quota"] = 0;
        // line 55
        echo "                    ";
        $context["salaire"] = 0;
        // line 56
        echo "                    <thead>
                        <tr>
                            <th>
                                <input type=\"checkbox\" id=\"check-all\" class=\"flat\">
                            </th>
                            <th>Composante</th>
                            <th>type</th>
                            <th>Taux</th>
                            <th>Montant</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salairecompo"]) ? $context["salairecompo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["compo"]) {
            // line 72
            echo "                            <tr class=\"even pointer\">
                                <td class=\"a-center \"><input type=\"checkbox\"  name=\"compo";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "id", array()), "html", null, true);
            echo "\" class=\"flat table_records\" ></td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "composante", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "type", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "taux", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "montant", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("salairecompo_edit", array("id" => $this->getAttribute($context["compo"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </tbody>
                </table>
                <button type=\"submit\" class=\"btn btn-primary\" >Payer le Salaire</button>
            </form>
        </div>
    </div>
                    <h3> Liste des salaires </h3>

        <div class=\"row\">
        <div class=\"col-md-12\">
         <table class=\"table table-hover liste\">
                <thead>
                    <tr>
                        <th>Banque</th>
                        <th>Date debut</th>
                        <th>Date fin </th>
                        <th>Salaire net</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 105
            echo "                        <tr>
                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libbanque", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datef", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "salnet", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-success btn-xs\" href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                </tbody>
            </table>
                
        </div>
    </div>

   

    ";
        // line 125
        echo "    <div class=\"modal fade salaire-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                ";
        // line 128
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Composante salaire</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), "composante", array()), 'row', array("label" => "Composante"));
        echo "
                    ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), "type", array()), 'row', array("label" => "Type"));
        echo "
                    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), "taux", array()), 'row', array("label" => "Taux"));
        echo "
                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), "montant", array()), 'row', array("label" => "Montant"));
        echo "

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default left\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), "submit", array()), 'row', array("label" => "Confirmer"));
        echo "
                </div> 
                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), "_token", array()), 'widget');
        echo " 
                ";
        // line 146
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : null), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "GestionBundle:Banque:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 146,  285 => 145,  280 => 143,  272 => 138,  268 => 137,  264 => 136,  260 => 135,  250 => 128,  245 => 125,  235 => 116,  224 => 111,  219 => 109,  215 => 108,  211 => 107,  207 => 106,  204 => 105,  200 => 104,  177 => 83,  167 => 79,  162 => 77,  158 => 76,  154 => 75,  150 => 74,  146 => 73,  143 => 72,  139 => 71,  122 => 56,  119 => 55,  117 => 54,  112 => 52,  100 => 43,  93 => 39,  86 => 35,  79 => 31,  72 => 27,  62 => 22,  56 => 18,  50 => 16,  44 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Gestion du Salaire </h1>*/
/* */
/*     <hr />*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
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
/*                         <th>Cellulaire</th>*/
/*                         <td> {{ employe.celemp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Salaire de base</th>*/
/*                         <td> {{ employe.salbase }}</td>*/
/*                     </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*            */
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <button type="button" class="salaireBTN btn btn-success" data-toggle="modal" data-target=".salaire-modal-md">Nouvelle composante</button>*/
/*             <form name="salaire" method="post" action="{{path('salaire_employe_creation', {'idemp':employe.id})}}">*/
/*                 <table class="table table-striped responsive-utilities jambo_table bulk_action">*/
/*                     {% set quota = 0 %}*/
/*                     {% set salaire = 0 %}*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>*/
/*                                 <input type="checkbox" id="check-all" class="flat">*/
/*                             </th>*/
/*                             <th>Composante</th>*/
/*                             <th>type</th>*/
/*                             <th>Taux</th>*/
/*                             <th>Montant</th>*/
/*                             <th>Action</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <tr>*/
/* */
/*                             {% for compo in salairecompo %}*/
/*                             <tr class="even pointer">*/
/*                                 <td class="a-center "><input type="checkbox"  name="compo{{ compo.id }}" class="flat table_records" ></td>*/
/*                                 <td>{{ compo.composante }}</td>*/
/*                                 <td>{{ compo.type }}</td>*/
/*                                 <td>{{ compo.taux }}</td>*/
/*                                 <td>{{ compo.montant }}</td>*/
/*                                 <td>*/
/*                                     <a href="{{ path('salairecompo_edit', { 'id': compo.id }) }}">Modifier</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <button type="submit" class="btn btn-primary" >Payer le Salaire</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*                     <h3> Liste des salaires </h3>*/
/* */
/*         <div class="row">*/
/*         <div class="col-md-12">*/
/*          <table class="table table-hover liste">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Banque</th>*/
/*                         <th>Date debut</th>*/
/*                         <th>Date fin </th>*/
/*                         <th>Salaire net</th>*/
/*                         <th>Action</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td>{{ entity.libbanque }}</td>*/
/*                             <td>{{ entity.dated|date('d/m/Y') }}</td>*/
/*                             <td>{{ entity.datef|date('d/m/Y') }}</td>*/
/*                             <td>{{ entity.salnet  }}</td>*/
/*                             <td>*/
/*                                 <a class="btn btn-success btn-xs" href="{{ path('banque_edit', { 'id': entity.id }) }}">Modifier</a>*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*                 */
/*         </div>*/
/*     </div>*/
/* */
/*    */
/* */
/*     {# le modal de gestion de salaire #}*/
/*     <div class="modal fade salaire-modal-md" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-md">*/
/*             <div class="modal-content">*/
/*                 {{ form_start(form_salairecompo) }}*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="myModalLabel2">Composante salaire</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_row(form_salairecompo.composante, {'label':'Composante'}  ) }}*/
/*                     {{ form_row(form_salairecompo.type, {'label':'Type'} ) }}*/
/*                     {{ form_row(form_salairecompo.taux, {'label':'Taux'} ) }}*/
/*                     {{ form_row(form_salairecompo.montant, {'label':'Montant'} ) }}*/
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default left" data-dismiss="modal">Fermer</button>*/
/*                     {{form_row(form_salairecompo.submit, { "label": "Confirmer" })}}*/
/*                 </div> */
/*                 {{ form_widget(form_salairecompo._token) }} */
/*                 {{ form_end(form_salairecompo, {'render_rest': false})}}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
