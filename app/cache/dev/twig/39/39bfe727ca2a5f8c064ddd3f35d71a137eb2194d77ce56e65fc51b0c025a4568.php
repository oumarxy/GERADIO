<?php

/* VentesBundle:Encaissement:new.html.twig */
class __TwigTemplate_be6bd7f615f58fc814205f8e5024a4ccf86a6a2ffadd6629156b7e33651fe946 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Encaissement:new.html.twig", 1);
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
        $__internal_61b4ee767d22b645291ef44f6164e33b1816639e9c037f4b1c3b75f2e1b2ca39 = $this->env->getExtension("native_profiler");
        $__internal_61b4ee767d22b645291ef44f6164e33b1816639e9c037f4b1c3b75f2e1b2ca39->enter($__internal_61b4ee767d22b645291ef44f6164e33b1816639e9c037f4b1c3b75f2e1b2ca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Encaissement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b4ee767d22b645291ef44f6164e33b1816639e9c037f4b1c3b75f2e1b2ca39->leave($__internal_61b4ee767d22b645291ef44f6164e33b1816639e9c037f4b1c3b75f2e1b2ca39_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_70a003eb3c6e1b9f8730191eda03611ab6cdbc66e795db0c1104625431356a88 = $this->env->getExtension("native_profiler");
        $__internal_70a003eb3c6e1b9f8730191eda03611ab6cdbc66e795db0c1104625431356a88->enter($__internal_70a003eb3c6e1b9f8730191eda03611ab6cdbc66e795db0c1104625431356a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        echo " 
    <h1>Encaissement</h1>
    <div class=\"row\">
        <div class=\"col-md-5\">
            ";
        // line 7
        $context["total_deja_encaisse"] = 0;
        // line 8
        echo "            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th>Numero</th>
                        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "numero", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Type Facture</th>
                        <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "typeFacture", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Total facture</th>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "totalFacture", array()), 0, ",", " "), "html", null, true);
        echo " F CFA</td>
                    </tr>
                    <tr>
                        <th>Reste à payer</th>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "encaissement", array()));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "totalFacture", array()) - (isset($context["total_deja_encaisse"]) ? $context["total_deja_encaisse"] : $this->getContext($context, "total_deja_encaisse"))), 0, ",", " "), "html", null, true);
        echo " F CFA</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>";
        // line 31
        if ($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "dateFacture", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "dateFacture", array()), "d/m/Y"), "html", null, true);
        }
        echo "</td>
                    </tr>
                </tbody>
            </table>
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture", array("idcli" => $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "client", array()), "id", array()), "etat" => "facture")), "html", null, true);
        echo "\">
                Retour
            </a>
        </div>
        <div class=\"col-md-5\">
            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
        </div>
    </div>

";
        
        $__internal_70a003eb3c6e1b9f8730191eda03611ab6cdbc66e795db0c1104625431356a88->leave($__internal_70a003eb3c6e1b9f8730191eda03611ab6cdbc66e795db0c1104625431356a88_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Encaissement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  104 => 35,  95 => 31,  87 => 27,  81 => 26,  78 => 25,  74 => 24,  67 => 20,  60 => 16,  53 => 12,  47 => 8,  45 => 7,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %} */
/*     <h1>Encaissement</h1>*/
/*     <div class="row">*/
/*         <div class="col-md-5">*/
/*             {% set total_deja_encaisse = 0 %}*/
/*             <table class="table table-bordered">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>Numero</th>*/
/*                         <td>{{ facture.numero }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Type Facture</th>*/
/*                         <td>{{ facture.typeFacture }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Total facture</th>*/
/*                         <td>{{ facture.totalFacture|number_format(0,',',' ') }} F CFA</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Reste à payer</th>*/
/*                             {% for encaissement in facture.encaissement %}*/
/*                                 {% set total_deja_encaisse = total_deja_encaisse + encaissement.montant  %}*/
/*                             {% endfor %}*/
/*                         <td>{{ (facture.totalFacture - total_deja_encaisse)|number_format(0,',',' ') }} F CFA</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Date</th>*/
/*                         <td>{% if facture.dateFacture %}{{ facture.dateFacture|date('d/m/Y') }}{% endif %}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*             <a class="btn btn-primary btn-sm" href="{{ path('facture', { 'idcli': facture.client.id, 'etat': 'facture' }) }}">*/
/*                 Retour*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-md-5">*/
/*             {{ form(form) }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
