<?php

/* GestionBundle:Banque:index.html.twig */
class __TwigTemplate_73eecaf8d83d3bac67afd292e12cc1d00fd0f9df953ed90de69c58cb9a6bb99c extends Twig_Template
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
        $__internal_85fb5acde7f1b3618b61a2d0f1395d4d0a94709c86430f272254099749048a94 = $this->env->getExtension("native_profiler");
        $__internal_85fb5acde7f1b3618b61a2d0f1395d4d0a94709c86430f272254099749048a94->enter($__internal_85fb5acde7f1b3618b61a2d0f1395d4d0a94709c86430f272254099749048a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Banque:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85fb5acde7f1b3618b61a2d0f1395d4d0a94709c86430f272254099749048a94->leave($__internal_85fb5acde7f1b3618b61a2d0f1395d4d0a94709c86430f272254099749048a94_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_d9a8f732ba06f8ca200ca5458cc3dbd4c3d3dd0b3804909c45788ce46676dc12 = $this->env->getExtension("native_profiler");
        $__internal_d9a8f732ba06f8ca200ca5458cc3dbd4c3d3dd0b3804909c45788ce46676dc12->enter($__internal_d9a8f732ba06f8ca200ca5458cc3dbd4c3d3dd0b3804909c45788ce46676dc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

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
        if ( !(null === $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "path", array()))) {
            // line 14
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/" . $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "path", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</strong></td>
                    </tr>

                    <tr>
                        <th>Activité</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "fonction", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "emailemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Téléphone</th>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "telpers", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cellulaire</th>
                        <td> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "celemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Salaire de base</th>
                        <td> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()), "html", null, true);
        echo "</td>
                    </tr>

                </tbody>
            </table>
           
        </div>
        <div class=\"col-md-6\">
            <button type=\"button\" class=\"salaireBTN btn btn-success\" data-toggle=\"modal\" data-target=\".salaire-modal-md\">Nouvelle composante</button>
            <form name=\"salaire\" method=\"post\" action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("salaire_employe_creation", array("idemp" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["salairecompo"]) ? $context["salairecompo"] : $this->getContext($context, "salairecompo")));
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
                        <th>Mode de paiement</th>
                        <th>Periode</th>
                        <th>Salaire net</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 104
            echo "                        <tr>
                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libbanque", array()), "html", null, true);
            echo "</td>
                            <td>Du: ";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dated", array()), "d/m/Y"), "html", null, true);
            echo " au
                            ";
            // line 107
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datef", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                            ";
            // line 109
            echo "                             ";
            $context["totalR"] = 0;
            // line 110
            echo "                    ";
            $context["totalG"] = 0;
            // line 111
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "salairecompoTable", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["compo"]) {
                echo "  
                            ";
                // line 112
                if (($this->getAttribute($context["compo"], "taux", array()) > 0)) {
                    echo "  
                                ";
                    // line 113
                    $context["quota"] = (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) * $this->getAttribute($context["compo"], "taux", array())) / 100);
                    // line 114
                    echo "                                ";
                    if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                        echo "  
                                    ";
                        // line 115
                        $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                        // line 116
                        echo "                                ";
                    } else {
                        // line 117
                        echo "                                    ";
                        $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                        echo "\t\t\t\t\t\t\t\t 
                                ";
                    }
                    // line 119
                    echo "                            ";
                } else {
                    // line 120
                    echo "                                ";
                    if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                        echo " 
                                    ";
                        // line 121
                        $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                        echo "\t
                                    ";
                        // line 122
                        $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                        echo "\t\t\t\t\t\t\t\t 
                                ";
                    } else {
                        // line 124
                        echo "                                    ";
                        $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                        echo "\t
                                    ";
                        // line 125
                        $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                        echo "\t
                                ";
                    }
                    // line 127
                    echo "                            ";
                }
                // line 128
                echo "                            
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                            <td>";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) - (isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR"))) + (isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG"))), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-success btn-xs\" href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                                <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque_pdf", array("idbanque" => $this->getAttribute($context["entity"], "id", array()), "idemp" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
            echo "\" target=\"blank\">Imprimer</a>

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                </tbody>
            </table>
                
        </div>
    </div>

   

    ";
        // line 147
        echo "    <div class=\"modal fade salaire-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                ";
        // line 150
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Composante salaire</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), "composante", array()), 'row', array("label" => "Composante"));
        echo "
                    ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), "type", array()), 'row', array("label" => "Type"));
        echo "
                    ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), "taux", array()), 'row', array("label" => "Taux"));
        echo "
                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), "montant", array()), 'row', array("label" => "Montant"));
        echo "

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default left\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), "submit", array()), 'row', array("label" => "Confirmer"));
        echo "
                </div> 
                ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), "_token", array()), 'widget');
        echo " 
                ";
        // line 168
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_salairecompo"]) ? $context["form_salairecompo"] : $this->getContext($context, "form_salairecompo")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_d9a8f732ba06f8ca200ca5458cc3dbd4c3d3dd0b3804909c45788ce46676dc12->leave($__internal_d9a8f732ba06f8ca200ca5458cc3dbd4c3d3dd0b3804909c45788ce46676dc12_prof);

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
        return array (  374 => 168,  370 => 167,  365 => 165,  357 => 160,  353 => 159,  349 => 158,  345 => 157,  335 => 150,  330 => 147,  320 => 138,  309 => 133,  305 => 132,  299 => 130,  292 => 128,  289 => 127,  284 => 125,  279 => 124,  274 => 122,  270 => 121,  265 => 120,  262 => 119,  256 => 117,  253 => 116,  251 => 115,  246 => 114,  244 => 113,  240 => 112,  233 => 111,  230 => 110,  227 => 109,  223 => 107,  219 => 106,  215 => 105,  212 => 104,  208 => 103,  186 => 83,  176 => 79,  171 => 77,  167 => 76,  163 => 75,  159 => 74,  155 => 73,  152 => 72,  148 => 71,  131 => 56,  128 => 55,  126 => 54,  121 => 52,  109 => 43,  102 => 39,  95 => 35,  88 => 31,  81 => 27,  71 => 22,  65 => 18,  59 => 16,  53 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
/*                         <th>Mode de paiement</th>*/
/*                         <th>Periode</th>*/
/*                         <th>Salaire net</th>*/
/*                         <th>Action</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td>{{ entity.libbanque }}</td>*/
/*                             <td>Du: {{ entity.dated|date('d/m/Y') }} au*/
/*                             {{ entity.datef|date('d/m/Y') }}</td>*/
/*                             {# calcul du net #}*/
/*                              {% set totalR = 0 %}*/
/*                     {% set totalG = 0 %}*/
/*                     {% for compo in entity.salairecompoTable %}  */
/*                             {% if compo.taux > 0 %}  */
/*                                 {% set quota = (employe.salbase * compo.taux)/100 %}*/
/*                                 {% if compo.type=='retenue' %}  */
/*                                     {% set totalR = totalR + quota %}*/
/*                                 {% else %}*/
/*                                     {% set totalG = totalG + quota %}								 */
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 {% if compo.type=='retenue'  %} */
/*                                     {% set quota = compo.montant %}	*/
/*                                     {% set totalR = totalR + quota %}								 */
/*                                 {% else %}*/
/*                                     {% set quota = compo.montant %}	*/
/*                                     {% set totalG = totalG + quota %}	*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/*                             */
/*                     {% endfor %}*/
/*                             <td>{{ employe.salbase - totalR + totalG  }}</td>*/
/*                             <td>*/
/*                                 <a class="btn btn-success btn-xs" href="{{ path('banque_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                                 <a class="btn btn-primary btn-xs" href="{{ path('banque_pdf',{ 'idbanque': entity.id ,'idemp': employe.id}) }}" target="blank">Imprimer</a>*/
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
