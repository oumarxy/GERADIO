<?php

/* VentesBundle:Operation:index.html.twig */
class __TwigTemplate_1a0473fd5993b6fdba429156f850b17b88222731891be8d35b4625e7d3517b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Operation:index.html.twig", 1);
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
        $__internal_21e10d8944ef63b24e83656485532ef5ddf68b30825fbbbb94bd7b44a2ca23fc = $this->env->getExtension("native_profiler");
        $__internal_21e10d8944ef63b24e83656485532ef5ddf68b30825fbbbb94bd7b44a2ca23fc->enter($__internal_21e10d8944ef63b24e83656485532ef5ddf68b30825fbbbb94bd7b44a2ca23fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Operation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e10d8944ef63b24e83656485532ef5ddf68b30825fbbbb94bd7b44a2ca23fc->leave($__internal_21e10d8944ef63b24e83656485532ef5ddf68b30825fbbbb94bd7b44a2ca23fc_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_e7dc4b145ed01892bdc26bd3ce3c75d3e35c8eceabf2f067ddeddd33af51d5a8 = $this->env->getExtension("native_profiler");
        $__internal_e7dc4b145ed01892bdc26bd3ce3c75d3e35c8eceabf2f067ddeddd33af51d5a8->enter($__internal_e7dc4b145ed01892bdc26bd3ce3c75d3e35c8eceabf2f067ddeddd33af51d5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        // line 4
        echo "    <h4>Liste operations</h4>

    <table class=\"table table-hover table-striped liste\">
        <thead>
            <tr>
                <th>Flux</th>
                <th>Nature</th>
                <th>Nom</th>
                <th>Fonction</th>
                <th>Téléphone</th>
                <th>Montant</th>
                <th>Date</th>
                <th>Motif</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "flux", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nature", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fonctionpersonres", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "montant", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            if ($this->getAttribute($context["entity"], "dateOperation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateOperation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-eye\"></i> Voir </a>&nbsp;
                        <a class=\"btn btn-success btn-xs\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("operation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"fa fa-edit\"></i>  Modifier</a>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("operation_new");
        echo "\">
        Nouvel opération
    </a>
";
        
        $__internal_e7dc4b145ed01892bdc26bd3ce3c75d3e35c8eceabf2f067ddeddd33af51d5a8->leave($__internal_e7dc4b145ed01892bdc26bd3ce3c75d3e35c8eceabf2f067ddeddd33af51d5a8_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Operation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  116 => 38,  105 => 33,  101 => 32,  96 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %}*/
/*     <h4>Liste operations</h4>*/
/* */
/*     <table class="table table-hover table-striped liste">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Flux</th>*/
/*                 <th>Nature</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Fonction</th>*/
/*                 <th>Téléphone</th>*/
/*                 <th>Montant</th>*/
/*                 <th>Date</th>*/
/*                 <th>Motif</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td>{{ entity.flux }}</td>*/
/*                     <td>{{ entity.nature}}</td>*/
/*                     <td>{{ entity.nom }}</td>*/
/*                     <td>{{ entity.fonctionpersonres }}</td>*/
/*                     <td>{{ entity.telephone }}</td>*/
/*                     <td>{{ entity.montant }}</td>*/
/*                     <td>{% if entity.dateOperation %}{{ entity.dateOperation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{{ entity.libelle }}</td>*/
/*                     <td>*/
/*                         <a class="btn btn-primary btn-xs" href="{{ path('operation_show', { 'id': entity.id }) }}"> <i class="fa fa-eye"></i> Voir </a>&nbsp;*/
/*                         <a class="btn btn-success btn-xs" href="{{ path('operation_edit', { 'id': entity.id }) }}"> <i class="fa fa-edit"></i>  Modifier</a>*/
/* */
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a class="btn btn-primary" href="{{ path('operation_new') }}">*/
/*         Nouvel opération*/
/*     </a>*/
/* {% endblock %}*/
/* */
