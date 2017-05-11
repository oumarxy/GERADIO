<?php

/* VentesBundle:Facture:index.html.twig */
class __TwigTemplate_d8823ec5100401bb80ec5b823f34a5642ba0d89217c4b8a4bc484ca8165760cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Facture:index.html.twig", 1);
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
        $__internal_aa57b8f9743759d7445b5460a986675d62b6c37f3a3f3f400eeee88e15a5a116 = $this->env->getExtension("native_profiler");
        $__internal_aa57b8f9743759d7445b5460a986675d62b6c37f3a3f3f400eeee88e15a5a116->enter($__internal_aa57b8f9743759d7445b5460a986675d62b6c37f3a3f3f400eeee88e15a5a116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Facture:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa57b8f9743759d7445b5460a986675d62b6c37f3a3f3f400eeee88e15a5a116->leave($__internal_aa57b8f9743759d7445b5460a986675d62b6c37f3a3f3f400eeee88e15a5a116_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_1b87bfb548c150c4cd8d8eb7548feea53f1ea814814b833535b9be4c853a4536 = $this->env->getExtension("native_profiler");
        $__internal_1b87bfb548c150c4cd8d8eb7548feea53f1ea814814b833535b9be4c853a4536->enter($__internal_1b87bfb548c150c4cd8d8eb7548feea53f1ea814814b833535b9be4c853a4536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        if (array_key_exists("client", $context)) {
            // line 6
            echo "            <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
            echo "</h2>
        ";
        }
        // line 8
        echo "        <h3>";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "</h3>

        <table  class=\"liste panel table table-striped table-bordered table-hover order-column\">
            <thead>
                <tr>
                    <th>Numero</th>
                    <th>Date</th>
                    <th>Montant facture</th>
                    <th>Reste à payer</th>
                    <th>Etat</th>
                    <th width=\"28%\">Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "                    ";
            $context["total_deja_encaisse"] = 0;
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numero", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            if ($this->getAttribute($context["entity"], "dateFacture", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFacture", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["entity"], "totalFacture", array()), 0, ",", " "), "html", null, true);
            echo "</td>
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "encaissement", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["encaissement"]) {
                // line 29
                echo "                            ";
                $context["total_deja_encaisse"] = ((isset($context["total_deja_encaisse"]) ? $context["total_deja_encaisse"] : $this->getContext($context, "total_deja_encaisse")) + $this->getAttribute($context["encaissement"], "montant", array()));
                // line 30
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encaissement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["entity"], "totalFacture", array()) - (isset($context["total_deja_encaisse"]) ? $context["total_deja_encaisse"] : $this->getContext($context, "total_deja_encaisse"))), 0, ",", " "), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-info btn-xs\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                Détails
                            </a>
                            ";
            // line 37
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "Proforma")) {
                // line 38
                echo "                                <a class=\"btn btn-info btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encaissement", array("idfacture" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                    Paiements
                                </a>
                            ";
            }
            // line 42
            echo "                            ";
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "Proforma")) {
                // line 43
                echo "                                <a class=\"btn btn-primary btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture_validation_proforma", array("idproforma" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                    Valider
                                </a>
                            ";
            } elseif (($this->getAttribute(            // line 46
$context["entity"], "etat", array()) == "En cours")) {
                // line 47
                echo "                                 ";
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COMPTABLE"))) {
                    // line 48
                    echo "                       
                                <a class=\"btn btn-primary btn-xs\" href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encaissement_new", array("idfacture" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                    Encaisser
                                </a>
                            ";
                }
                // line 53
                echo "                            ";
            }
            // line 54
            echo "

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_1b87bfb548c150c4cd8d8eb7548feea53f1ea814814b833535b9be4c853a4536->leave($__internal_1b87bfb548c150c4cd8d8eb7548feea53f1ea814814b833535b9be4c853a4536_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Facture:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 59,  162 => 54,  159 => 53,  152 => 49,  149 => 48,  146 => 47,  144 => 46,  137 => 43,  134 => 42,  126 => 38,  124 => 37,  118 => 34,  113 => 32,  108 => 31,  102 => 30,  99 => 29,  95 => 28,  91 => 27,  85 => 26,  81 => 25,  78 => 24,  75 => 23,  71 => 22,  53 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %}*/
/*     <div class="container">*/
/*         {% if client is defined %}*/
/*             <h2>{{client.nom}} / {{client.telephone}}</h2>*/
/*         {% endif %}*/
/*         <h3>{{type}}</h3>*/
/* */
/*         <table  class="liste panel table table-striped table-bordered table-hover order-column">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Numero</th>*/
/*                     <th>Date</th>*/
/*                     <th>Montant facture</th>*/
/*                     <th>Reste à payer</th>*/
/*                     <th>Etat</th>*/
/*                     <th width="28%">Action</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for entity in entities %}*/
/*                     {% set total_deja_encaisse = 0 %}*/
/*                     <tr>*/
/*                         <td>{{ entity.numero }}</td>*/
/*                         <td>{% if entity.dateFacture %}{{ entity.dateFacture|date('d/m/Y') }}{% endif %}</td>*/
/*                         <td>{{ entity.totalFacture|number_format(0,',',' ') }}</td>*/
/*                         {% for encaissement in entity.encaissement %}*/
/*                             {% set total_deja_encaisse = total_deja_encaisse + encaissement.montant  %}*/
/*                         {% endfor %}*/
/*                         <td>{{(entity.totalFacture - total_deja_encaisse)|number_format(0,',',' ')  }}</td>*/
/*                         <td>{{ entity.etat }}</td>*/
/*                         <td>*/
/*                             <a class="btn btn-info btn-xs" href="{{ path('facture_show', {'id': entity.id }) }}">*/
/*                                 Détails*/
/*                             </a>*/
/*                             {% if type != 'Proforma' %}*/
/*                                 <a class="btn btn-info btn-xs" href="{{ path('encaissement', {'idfacture': entity.id }) }}">*/
/*                                     Paiements*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                             {% if type == 'Proforma' %}*/
/*                                 <a class="btn btn-primary btn-xs" href="{{ path('facture_validation_proforma', {'idproforma': entity.id}) }}">*/
/*                                     Valider*/
/*                                 </a>*/
/*                             {% elseif entity.etat == "En cours" %}*/
/*                                  {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_COMPTABLE')  %}*/
/*                        */
/*                                 <a class="btn btn-primary btn-xs" href="{{ path('encaissement_new', {'idfacture': entity.id}) }}">*/
/*                                     Encaisser*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                             {% endif %}*/
/* */
/* */
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
