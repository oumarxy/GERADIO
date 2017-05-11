<?php

/* VentesBundle:Encaissement:index.html.twig */
class __TwigTemplate_133cf1b30c6b9ea07ee1fade8bc6ee67b2125a833a97921af6a8c4f28222ec29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Encaissement:index.html.twig", 1);
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
        $__internal_a9a8e364233bd2b69d0ba5950058db0fbcb75db2653653aa5e0a3ac7d97734e8 = $this->env->getExtension("native_profiler");
        $__internal_a9a8e364233bd2b69d0ba5950058db0fbcb75db2653653aa5e0a3ac7d97734e8->enter($__internal_a9a8e364233bd2b69d0ba5950058db0fbcb75db2653653aa5e0a3ac7d97734e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Encaissement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a8e364233bd2b69d0ba5950058db0fbcb75db2653653aa5e0a3ac7d97734e8->leave($__internal_a9a8e364233bd2b69d0ba5950058db0fbcb75db2653653aa5e0a3ac7d97734e8_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_63bda057102d4d9557527a7ea354f0c008ad33691aeaa4ed62566bbcf62f91f5 = $this->env->getExtension("native_profiler");
        $__internal_63bda057102d4d9557527a7ea354f0c008ad33691aeaa4ed62566bbcf62f91f5->enter($__internal_63bda057102d4d9557527a7ea354f0c008ad33691aeaa4ed62566bbcf62f91f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        echo " 
    ";
        // line 4
        if (array_key_exists("client", $context)) {
            // line 5
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"x_panel tile fixed_height_320 overflow_hidden\">
                    <div class=\"x_title\">
                        <h2>Infos client</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">

                        <table class=\"table table-striped table-bordered table-hover\">
                            <tbody>
                                <tr>
                                    <th>Catégorie</th>
                                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "categorie", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Numéro</th>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "numero", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Adresse</th>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Téléphone</th>
                                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Mail</th>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "mail", array()), "html", null, true);
            echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class=\"col-md-6\">
                <div class=\"x_panel tile fixed_height_320 overflow_hidden\">
                    <div class=\"x_title\">
                        <h4>Infos facture</h4>

                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">

                        <table class=\"table table-striped table-hover\">
                            <tbody>
                                <tr>
                                    <th>Numero</th>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "numero", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Type de facture</th>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "typeFacture", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Total facture</th>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "totalFacture", array()), 0, ",", " "), "html", null, true);
            echo "</td>
                                </tr>

                                <tr>
                                    <th>Date facture</th>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "dateFacture", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                </tr>
                                <tr>
                                    <th>Etat</th>
                                    <td><span class=\"label label-info\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "etat", array()), "html", null, true);
            echo "</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    ";
        }
        // line 88
        echo "
    <h3>Infos encaissements</h3>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Montant</th>
                <th>Date</th>
                <th>Mode</th>
                <th>Destination</th>
                <th>Edité par</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 104
            echo "                <tr>


                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "montant", array()), 0, ",", " "), "html", null, true);
            echo "</td>
                    <td>";
            // line 108
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mode", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "destination", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 112
            if ( !(null === $this->getAttribute($context["entity"], "utilisateur", array()))) {
                echo " 
                            ";
                // line 113
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "utilisateur", array()), "username", array())), "html", null, true);
                echo "
                        ";
            }
            // line 115
            echo "                    </td>
                    <td>
                        <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encaissement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Détails</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </tbody>
    </table>

    ";
        // line 124
        if (array_key_exists("client", $context)) {
            // line 125
            echo "        <a class=\"btn btn-success\" target='_blank' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encaissement_print", array("idfact" => $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "id", array()))), "html", null, true);
            echo "\" ><i class=\"fa fa-file-pdf-o\"></i> Etat des Paiements</a>
    ";
        }
        
        $__internal_63bda057102d4d9557527a7ea354f0c008ad33691aeaa4ed62566bbcf62f91f5->leave($__internal_63bda057102d4d9557527a7ea354f0c008ad33691aeaa4ed62566bbcf62f91f5_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Encaissement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 125,  235 => 124,  230 => 121,  220 => 117,  216 => 115,  211 => 113,  207 => 112,  202 => 110,  198 => 109,  192 => 108,  188 => 107,  183 => 104,  179 => 103,  162 => 88,  147 => 76,  140 => 72,  132 => 67,  125 => 63,  118 => 59,  94 => 38,  87 => 34,  80 => 30,  73 => 26,  66 => 22,  59 => 18,  44 => 5,  42 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %} */
/*     {% if client is defined %}*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <div class="x_panel tile fixed_height_320 overflow_hidden">*/
/*                     <div class="x_title">*/
/*                         <h2>Infos client</h2>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="x_content">*/
/* */
/*                         <table class="table table-striped table-bordered table-hover">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th>Catégorie</th>*/
/*                                     <td>{{ client.categorie }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Numéro</th>*/
/*                                     <td>{{ client.numero }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Nom</th>*/
/*                                     <td>{{client.nom }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Adresse</th>*/
/*                                     <td>{{ client.adresse }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Téléphone</th>*/
/*                                     <td>{{ client.telephone }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Mail</th>*/
/*                                     <td>{{ client.mail }}</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="x_panel tile fixed_height_320 overflow_hidden">*/
/*                     <div class="x_title">*/
/*                         <h4>Infos facture</h4>*/
/* */
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="x_content">*/
/* */
/*                         <table class="table table-striped table-hover">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th>Numero</th>*/
/*                                     <td>{{ facture.numero }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Type de facture</th>*/
/*                                     <td>{{ facture.typeFacture }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Total facture</th>*/
/*                                     <td>{{ facture.totalFacture|number_format(0,',',' ') }}</td>*/
/*                                 </tr>*/
/* */
/*                                 <tr>*/
/*                                     <th>Date facture</th>*/
/*                                     <td>{{ facture.dateFacture|date('d/m/Y') }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Etat</th>*/
/*                                     <td><span class="label label-info">{{ facture.etat }}</span></td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <h3>Infos encaissements</h3>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Montant</th>*/
/*                 <th>Date</th>*/
/*                 <th>Mode</th>*/
/*                 <th>Destination</th>*/
/*                 <th>Edité par</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/* */
/* */
/*                     <td>{{ entity.montant |number_format(0,',',' ')}}</td>*/
/*                     <td>{% if entity.date %}{{ entity.date|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{{ entity.mode }}</td>*/
/*                     <td>{{ entity.destination }}</td>*/
/*                     <td>*/
/*                         {%if entity.utilisateur is not null %} */
/*                             {{entity.utilisateur.username|capitalize}}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         <a class="btn btn-primary btn-xs" href="{{ path('encaissement_show', { 'id': entity.id }) }}">Détails</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% if client is defined %}*/
/*         <a class="btn btn-success" target='_blank' href="{{ path('encaissement_print', { 'idfact': facture.id }) }}" ><i class="fa fa-file-pdf-o"></i> Etat des Paiements</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
