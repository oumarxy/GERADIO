<?php

/* GestionBundle:Cvupload:index.html.twig */
class __TwigTemplate_dda08e37808265f111941e1cbb3a3075878dedb3ece2c9592383fe87290f931e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Cvupload:index.html.twig", 1);
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
        $__internal_f436d034c36a1b047a381b41f6ed15f32a717d9a2cb12a946d86dbd4a77ef081 = $this->env->getExtension("native_profiler");
        $__internal_f436d034c36a1b047a381b41f6ed15f32a717d9a2cb12a946d86dbd4a77ef081->enter($__internal_f436d034c36a1b047a381b41f6ed15f32a717d9a2cb12a946d86dbd4a77ef081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Cvupload:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f436d034c36a1b047a381b41f6ed15f32a717d9a2cb12a946d86dbd4a77ef081->leave($__internal_f436d034c36a1b047a381b41f6ed15f32a717d9a2cb12a946d86dbd4a77ef081_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_e66bc2fd14fed143c592ddd72dcac9c2b59beb3fba27d19c5b1e8605bd09a0e5 = $this->env->getExtension("native_profiler");
        $__internal_e66bc2fd14fed143c592ddd72dcac9c2b59beb3fba27d19c5b1e8605bd09a0e5->enter($__internal_e66bc2fd14fed143c592ddd72dcac9c2b59beb3fba27d19c5b1e8605bd09a0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        echo " 
    <h1>Consulter CV de ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</h1>
<button type=\"button\" class=\"cvBTN btn btn-success\" data-toggle=\"modal\" data-target=\".cv-modal-md\">Télécharger cv (pdf)</button>
     <hr />
    <div class=\"row\">
        <div class=\"col-md-5\">
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
                        <th> Nom employe</th>
                        <td><strong class=\"text-uppercase\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</strong></td>
                    </tr>
                   
                    <tr>
                        <th>Activite</th>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "fonction", array()), "html", null, true);
        echo "</td>
                    </tr>
\t\t\t\t\t <tr>
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

                </tbody>
            </table>
             <a class=\"btn btn-primary \" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("employe");
        echo "\">
                                 retour
                            </a>
        </div>
        <div class=\"col-md-7\">
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Intitulé</th>
                <th>Date</th>
\t\t\t\t<th>CV</th>
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
            echo "            <tr>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libellecv", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
            echo "\" target=\"blank\"><i class=\"fa fa-eye\"></i> Cv (PDF)</a></td>
                <td>
               
                        <a class=\"btn btn-success btn-xs\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cvupload_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                   
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>

       </div>
    </div>
        ";
        // line 77
        echo "
    <div class=\"modal fade cv-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content\">
                ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_cvupload"]) ? $context["form_cvupload"] : $this->getContext($context, "form_cvupload")), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Upload cv</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_cvupload"]) ? $context["form_cvupload"] : $this->getContext($context, "form_cvupload")), "libellecv", array()), 'row', array("label" => "Intitulé"));
        echo "
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_cvupload"]) ? $context["form_cvupload"] : $this->getContext($context, "form_cvupload")), "date", array()), 'row');
        echo "
\t\t\t\t\t ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_cvupload"]) ? $context["form_cvupload"] : $this->getContext($context, "form_cvupload")), "file", array()), 'row', array("label" => "cv en pdf"));
        echo " 
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default left\" data-dismiss=\"modal\">Fermer</button>
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_cvupload"]) ? $context["form_cvupload"] : $this->getContext($context, "form_cvupload")), "submit", array()), 'row', array("label" => "Confirmer"));
        echo "
                </div> 
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_cvupload"]) ? $context["form_cvupload"] : $this->getContext($context, "form_cvupload")), "_token", array()), 'widget');
        echo " 
                ";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_cvupload"]) ? $context["form_cvupload"] : $this->getContext($context, "form_cvupload")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
    ";
        
        $__internal_e66bc2fd14fed143c592ddd72dcac9c2b59beb3fba27d19c5b1e8605bd09a0e5->leave($__internal_e66bc2fd14fed143c592ddd72dcac9c2b59beb3fba27d19c5b1e8605bd09a0e5_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Cvupload:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 97,  208 => 96,  203 => 94,  196 => 90,  192 => 89,  188 => 88,  178 => 81,  172 => 77,  165 => 71,  154 => 66,  148 => 63,  144 => 62,  140 => 61,  137 => 60,  133 => 59,  115 => 44,  107 => 39,  100 => 35,  93 => 31,  86 => 27,  76 => 22,  70 => 18,  64 => 16,  58 => 14,  56 => 13,  42 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %} */
/*     <h1>Consulter CV de {{ employe.nomemp  }} {{ employe.prenomemp  }}</h1>*/
/* <button type="button" class="cvBTN btn btn-success" data-toggle="modal" data-target=".cv-modal-md">Télécharger cv (pdf)</button>*/
/*      <hr />*/
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
/*                         <th> Nom employe</th>*/
/*                         <td><strong class="text-uppercase">{{ employe.nomemp  }} {{ employe.prenomemp  }}</strong></td>*/
/*                     </tr>*/
/*                    */
/*                     <tr>*/
/*                         <th>Activite</th>*/
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
/*                         <th>Cellulaire</th>*/
/*                         <td> {{ employe.celemp }}</td>*/
/*                     </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*              <a class="btn btn-primary " href="{{ path('employe') }}">*/
/*                                  retour*/
/*                             </a>*/
/*         </div>*/
/*         <div class="col-md-7">*/
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Intitulé</th>*/
/*                 <th>Date</th>*/
/* 				<th>CV</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.libellecv }}</td>*/
/*                 <td>{{ entity.date|date("d/m/Y")}}</td>*/
/* 				<td><a href="{{ asset('uploads/documents/' ~ entity.path) }}" target="blank"><i class="fa fa-eye"></i> Cv (PDF)</a></td>*/
/*                 <td>*/
/*                */
/*                         <a class="btn btn-success btn-xs" href="{{ path('cvupload_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*        </div>*/
/*     </div>*/
/*         {# le modal de gestion de cv #}*/
/* */
/*     <div class="modal fade cv-modal-md" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-md">*/
/*             <div class="modal-content">*/
/*                 {{ form_start(form_cvupload) }}*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="myModalLabel2">Upload cv</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_row(form_cvupload.libellecv, {'label':'Intitulé'}) }}*/
/*                     {{ form_row(form_cvupload.date) }}*/
/* 					 {{ form_row(form_cvupload.file,{'label':'cv en pdf'}) }} */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default left" data-dismiss="modal">Fermer</button>*/
/*                     {{form_row(form_cvupload.submit, { "label": "Confirmer" })}}*/
/*                 </div> */
/*                 {{ form_widget(form_cvupload._token) }} */
/*                 {{ form_end(form_cvupload, {'render_rest': false})}}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
