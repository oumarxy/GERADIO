<?php

/* VentesBundle:Encaissement:show.html.twig */
class __TwigTemplate_ccbe259f4f74677a33a561128fadc8690060841db795ed0ca214d060465b70ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Encaissement:show.html.twig", 1);
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
        $__internal_e7ae35da098256b65f3b55af7e330957e03007e1ed791c1dda29d0fe74de0d96 = $this->env->getExtension("native_profiler");
        $__internal_e7ae35da098256b65f3b55af7e330957e03007e1ed791c1dda29d0fe74de0d96->enter($__internal_e7ae35da098256b65f3b55af7e330957e03007e1ed791c1dda29d0fe74de0d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Encaissement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ae35da098256b65f3b55af7e330957e03007e1ed791c1dda29d0fe74de0d96->leave($__internal_e7ae35da098256b65f3b55af7e330957e03007e1ed791c1dda29d0fe74de0d96_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_c8d7039dbf83569cecfe5e896e45a1f28c283f6b2088e61e73cd8f992576e200 = $this->env->getExtension("native_profiler");
        $__internal_c8d7039dbf83569cecfe5e896e45a1f28c283f6b2088e61e73cd8f992576e200->enter($__internal_c8d7039dbf83569cecfe5e896e45a1f28c283f6b2088e61e73cd8f992576e200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        echo " 
    <h1>Encaissement</h1>
    <div class=\"row\">
        <div class=\"col-md-5\">
            ";
        // line 7
        $context["total_deja_encaisse"] = 0;
        // line 8
        echo "            <table class=\"table table-bordered table-striped table-hover\">
                <tbody>
                    <tr>
                        <th>Numero</th>
                        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "numero", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Type Facture</th>
                        <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "typeFacture", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Total facture</th>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "totalFacture", array()), 0, ",", " "), "html", null, true);
        echo " F CFA</td>
                    </tr>
                    <tr>
                        <th>Reste à payer</th>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "encaissement", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["encaissement"]) {
            // line 25
            echo "                                ";
            $context["total_deja_encaisse"] = ((isset($context["total_deja_encaisse"]) ? $context["total_deja_encaisse"] : $this->getContext($context, "total_deja_encaisse")) + $this->getAttribute($context["encaissement"], "montant", array()));
            // line 26
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encaissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                        <td>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "totalFacture", array()) - (isset($context["total_deja_encaisse"]) ? $context["total_deja_encaisse"] : $this->getContext($context, "total_deja_encaisse"))), 0, ",", " "), "html", null, true);
        echo " F CFA</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "dateFacture", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "dateFacture", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class=\"col-md-5\">
            <table class=\"table table-hover table-striped\">
                <tbody>
                    <tr>
                        <th>Identifiant</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Montant</th>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montant", array()), 0, ",", " "), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Mode</th>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mode", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Destination</th>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "destination", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
        ";
        // line 63
        if ( !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "utilisateur", array()))) {
            echo " 
            <div class=\"col-md-4\">
                <div class=\"\">Dernière modification effectuée par: ";
            // line 65
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "utilisateur", array()), "username", array())), "html", null, true);
            echo "</div>
                <div class=\"\">Le ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastUpdate", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastUpdate", array()), "H:i:s"), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 69
        echo "    </div>
    <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture", array("idcli" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "client", array()), "id", array()), "etat" => "facture")), "html", null, true);
        echo "\">
        Retour
    </a>

    <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encaissement", array("idfacture" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "id", array()))), "html", null, true);
        echo "\">
        Voir ses paiements
    </a>

       <a class=\"btn btn-primary btn-sm\" target='_blank' href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encaissement_single_etat", array("idencaiss" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
          <i class=\"fa fa-file-pdf-o\"></i>  Générer le recu
        </a>
    
";
        
        $__internal_c8d7039dbf83569cecfe5e896e45a1f28c283f6b2088e61e73cd8f992576e200->leave($__internal_c8d7039dbf83569cecfe5e896e45a1f28c283f6b2088e61e73cd8f992576e200_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Encaissement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 78,  174 => 74,  167 => 70,  164 => 69,  156 => 66,  152 => 65,  147 => 63,  139 => 58,  132 => 54,  125 => 50,  118 => 46,  111 => 42,  95 => 31,  87 => 27,  81 => 26,  78 => 25,  74 => 24,  67 => 20,  60 => 16,  53 => 12,  47 => 8,  45 => 7,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %} */
/*     <h1>Encaissement</h1>*/
/*     <div class="row">*/
/*         <div class="col-md-5">*/
/*             {% set total_deja_encaisse = 0 %}*/
/*             <table class="table table-bordered table-striped table-hover">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>Numero</th>*/
/*                         <td>{{ entity.facture.numero }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Type Facture</th>*/
/*                         <td>{{ entity.facture.typeFacture }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Total facture</th>*/
/*                         <td>{{ entity.facture.totalFacture|number_format(0,',',' ') }} F CFA</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Reste à payer</th>*/
/*                             {% for encaissement in entity.facture.encaissement %}*/
/*                                 {% set total_deja_encaisse = total_deja_encaisse + encaissement.montant  %}*/
/*                             {% endfor %}*/
/*                         <td>{{ (entity.facture.totalFacture - total_deja_encaisse)|number_format(0,',',' ') }} F CFA</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Date</th>*/
/*                         <td>{% if entity.facture.dateFacture %}{{ entity.facture.dateFacture|date('d/m/Y') }}{% endif %}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </div>*/
/*         <div class="col-md-5">*/
/*             <table class="table table-hover table-striped">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>Identifiant</th>*/
/*                         <td>{{ entity.id }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Montant</th>*/
/*                         <td>{{ entity.montant|number_format(0,',',' ') }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Date</th>*/
/*                         <td>{{ entity.date|date('d/m/Y H:i:s') }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Mode</th>*/
/*                         <td>{{ entity.mode }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Destination</th>*/
/*                         <td>{{ entity.destination }}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {%if entity.utilisateur is not null %} */
/*             <div class="col-md-4">*/
/*                 <div class="">Dernière modification effectuée par: {{entity.utilisateur.username|capitalize}}</div>*/
/*                 <div class="">Le {{entity.lastUpdate|date('d/m/Y')}} à {{entity.lastUpdate|date('H:i:s')}}</div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <a class="btn btn-primary btn-sm" href="{{ path('facture', { 'idcli': entity.facture.client.id, 'etat':'facture' }) }}">*/
/*         Retour*/
/*     </a>*/
/* */
/*     <a class="btn btn-primary btn-sm" href="{{ path('encaissement', {'idfacture': entity.facture.id }) }}">*/
/*         Voir ses paiements*/
/*     </a>*/
/* */
/*        <a class="btn btn-primary btn-sm" target='_blank' href="{{ path('encaissement_single_etat', { 'idencaiss': entity.id }) }}">*/
/*           <i class="fa fa-file-pdf-o"></i>  Générer le recu*/
/*         </a>*/
/*     */
/* {% endblock %}*/
/* */
