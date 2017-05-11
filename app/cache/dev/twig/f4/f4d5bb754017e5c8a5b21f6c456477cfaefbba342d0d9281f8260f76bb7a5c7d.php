<?php

/* VentesBundle:Client:proforma.html.twig */
class __TwigTemplate_d57edba54ff21d57254e5acf5bd36f89299780664bdbd5f7b936650a8b343100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Client:proforma.html.twig", 1);
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
        $__internal_25d7b64ac643d092e2cae9208cc0b7ef79d29779775a6ed3149ce44c6314a61f = $this->env->getExtension("native_profiler");
        $__internal_25d7b64ac643d092e2cae9208cc0b7ef79d29779775a6ed3149ce44c6314a61f->enter($__internal_25d7b64ac643d092e2cae9208cc0b7ef79d29779775a6ed3149ce44c6314a61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Client:proforma.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d7b64ac643d092e2cae9208cc0b7ef79d29779775a6ed3149ce44c6314a61f->leave($__internal_25d7b64ac643d092e2cae9208cc0b7ef79d29779775a6ed3149ce44c6314a61f_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_6ddfe0c14ddedadf7cba4542b62422248ed2c84521988d9cf85f51422d6f5229 = $this->env->getExtension("native_profiler");
        $__internal_6ddfe0c14ddedadf7cba4542b62422248ed2c84521988d9cf85f51422d6f5229->enter($__internal_6ddfe0c14ddedadf7cba4542b62422248ed2c84521988d9cf85f51422d6f5229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        echo " 
    <h3>Générer Proforma</h3>

    <div class=\"row\">
        <div class=\"col-md-12\">

            <table class=\"table table-hover table-striped liste\">
                <thead>
                    <tr>
                        <th> 
                            Catégorie
                        </th>
                        <th> 
                            Client
                        </th>

                        <th> 
                            Adresse
                        </th>

                        <th> 
                            Téléphone
                        </th>
                        <th> 
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "libelle", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</td>
                            <td>    <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture_new", array("idclient" => $this->getAttribute($context["entity"], "id", array()), "etat" => "proforma")), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-cog\">  </i> Proforma</a>

                                <a class=\"btn btn-info btn-xs\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture", array("idcli" => $this->getAttribute($context["entity"], "id", array()), "etat" => "proforma")), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-info\">  </i> Détails</a>

                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_6ddfe0c14ddedadf7cba4542b62422248ed2c84521988d9cf85f51422d6f5229->leave($__internal_6ddfe0c14ddedadf7cba4542b62422248ed2c84521988d9cf85f51422d6f5229_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Client:proforma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  99 => 41,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  74 => 33,  70 => 32,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %} */
/*     <h3>Générer Proforma</h3>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/* */
/*             <table class="table table-hover table-striped liste">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th> */
/*                             Catégorie*/
/*                         </th>*/
/*                         <th> */
/*                             Client*/
/*                         </th>*/
/* */
/*                         <th> */
/*                             Adresse*/
/*                         </th>*/
/* */
/*                         <th> */
/*                             Téléphone*/
/*                         </th>*/
/*                         <th> */
/*                             Action*/
/*                         </th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td>{{ entity.categorie.libelle }}</td>*/
/*                             <td>{{ entity.nom }}</td>*/
/*                             <td>{{ entity.adresse }}</td>*/
/*                             <td>{{ entity.telephone }}</td>*/
/*                             <td>    <a class="btn btn-primary btn-xs" href="{{ path('facture_new', { 'idclient': entity.id, 'etat': 'proforma'}) }}">*/
/*                                     <i class="fa fa-cog">  </i> Proforma</a>*/
/* */
/*                                 <a class="btn btn-info btn-xs" href="{{ path('facture', { 'idcli': entity.id, 'etat': 'proforma'}) }}">*/
/*                                     <i class="fa fa-info">  </i> Détails</a>*/
/* */
/*                             </td>*/
/*                         </tr>*/
/* */
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
