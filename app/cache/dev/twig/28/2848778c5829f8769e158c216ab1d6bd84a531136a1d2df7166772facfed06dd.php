<?php

/* VentesBundle:Client:index.html.twig */
class __TwigTemplate_f6516b4b202ced84e63f121cee4830f70af0a6d7a48a652811cbd924ba64e590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Client:index.html.twig", 1);
        $this->blocks = array(
            'container_ventes' => array($this, 'block_container_ventes'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VentesBundle::layout_ventes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f792701648356c2746b9d1a11c69c6b6a4728bb077b7b968ebe4de139b7a821 = $this->env->getExtension("native_profiler");
        $__internal_2f792701648356c2746b9d1a11c69c6b6a4728bb077b7b968ebe4de139b7a821->enter($__internal_2f792701648356c2746b9d1a11c69c6b6a4728bb077b7b968ebe4de139b7a821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f792701648356c2746b9d1a11c69c6b6a4728bb077b7b968ebe4de139b7a821->leave($__internal_2f792701648356c2746b9d1a11c69c6b6a4728bb077b7b968ebe4de139b7a821_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_a001319bc2467615ef3be037e3afc27b583b2a729265f0e77bf50e046ebbc153 = $this->env->getExtension("native_profiler");
        $__internal_a001319bc2467615ef3be037e3afc27b583b2a729265f0e77bf50e046ebbc153->enter($__internal_a001319bc2467615ef3be037e3afc27b583b2a729265f0e77bf50e046ebbc153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        echo " 
    <h3>Liste des Clients</h3>
    <button type=\"button\" class=\"clientBTN btn btn-success\" data-toggle=\"modal\" data-target=\".client-modal-lg\">Nouveau Client</button>
    <input type=\"text\" class=\"pull-right input-sm\" id=\"rechercheClient\" placeholder=\"Recherche...\" />
    <hr />

    <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "
            <div class=\"col-md-4 col-sm-6 animated fadeInDown client\">
                <div class=\"well profile_view\">
                    <div class=\"col-sm-12\">
                        <h4 class=\"brief\"><i>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "categorie", array()), "libelle", array()), "html", null, true);
            echo "</i></h4>
                        <div class=\"left col-xs-7\">
                            <h2 class=\"clientItem\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</h2>
                            <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo " </p>
                            <i class=\"fa fa-phone\"></i><span> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</span>

                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"right col-xs-5 text-center\">
                            <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/img/user.png"), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-responsive\">
                        </div>
                    </div>
                    <div class=\"col-xs-12 bottom \">
                        <div class=\"col-xs-12 emphasis\">
                        ";
            // line 29
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_COMMERCIAL"))) {
                // line 30
                echo "                            <a class=\"btn btn-success btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-user\">  </i> Voir plus</a>
                            <a class=\"btn btn-success btn-xs\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-edit\">  </i> Modifier</a>

                            <a class=\"btn btn-primary btn-xs\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit", array("idcli" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-cog\">  </i> Produits</a>
                            <a class=\"btn btn-primary btn-xs\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture_new", array("idclient" => $this->getAttribute($context["entity"], "id", array()), "etat" => "facture")), "html", null, true);
                echo "\">
                                <i class=\"fa fa-adjust\">  </i> Facture
                            </a>

                            <div class=\"divider\"></div>
                            
                        ";
            }
            // line 44
            echo "                            <div class=\"col-xs-12 emphasis\">
                                <a class=\"btn btn-danger btn-xs\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facture", array("idcli" => $this->getAttribute($context["entity"], "id", array()), "etat" => "facture")), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-calculator\">  </i> Encaissement</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </div>
    <button type=\"button\" class=\"clientBTN btn btn-success\" data-toggle=\"modal\" data-target=\".client-modal-lg\">Nouveau Client</button>

    <hr />



    ";
        // line 63
        echo "
    <div class=\"modal fade client-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel2\">Ajout Client</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-md-offset-1\" >
                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'row');
        echo "
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'row');
        echo "
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'row');
        echo "
                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'row');
        echo "
                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "activite", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-5\">
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </div>
                    </div>

                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo " 
                    ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_a001319bc2467615ef3be037e3afc27b583b2a729265f0e77bf50e046ebbc153->leave($__internal_a001319bc2467615ef3be037e3afc27b583b2a729265f0e77bf50e046ebbc153_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_92192749db4e6f5f19df5afa2201efde1c41863d0f9202e6e3cd4c009efec512 = $this->env->getExtension("native_profiler");
        $__internal_92192749db4e6f5f19df5afa2201efde1c41863d0f9202e6e3cd4c009efec512->enter($__internal_92192749db4e6f5f19df5afa2201efde1c41863d0f9202e6e3cd4c009efec512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 98
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/instafilta.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#rechercheClient').instaFilta({
            targets: '.clientItem',
            sections: '.client',
            hideEmptySections: true,
            beginsWith: false,
            caseSensitive: false,
            typeDelay: 0
        });
    </script>
";
        
        $__internal_92192749db4e6f5f19df5afa2201efde1c41863d0f9202e6e3cd4c009efec512->leave($__internal_92192749db4e6f5f19df5afa2201efde1c41863d0f9202e6e3cd4c009efec512_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 98,  218 => 97,  204 => 90,  200 => 89,  193 => 85,  187 => 82,  183 => 81,  179 => 80,  175 => 79,  171 => 78,  167 => 77,  163 => 76,  151 => 67,  145 => 63,  136 => 55,  120 => 45,  117 => 44,  107 => 37,  102 => 35,  96 => 32,  90 => 30,  88 => 29,  80 => 24,  72 => 19,  68 => 18,  64 => 17,  59 => 15,  53 => 11,  49 => 10,  35 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %} */
/*     <h3>Liste des Clients</h3>*/
/*     <button type="button" class="clientBTN btn btn-success" data-toggle="modal" data-target=".client-modal-lg">Nouveau Client</button>*/
/*     <input type="text" class="pull-right input-sm" id="rechercheClient" placeholder="Recherche..." />*/
/*     <hr />*/
/* */
/*     <div class="row">*/
/*         {% for entity in entities %}*/
/* */
/*             <div class="col-md-4 col-sm-6 animated fadeInDown client">*/
/*                 <div class="well profile_view">*/
/*                     <div class="col-sm-12">*/
/*                         <h4 class="brief"><i>{{ entity.categorie.libelle }}</i></h4>*/
/*                         <div class="left col-xs-7">*/
/*                             <h2 class="clientItem">{{ entity.nom }}</h2>*/
/*                             <p>{{ entity.adresse }} </p>*/
/*                             <i class="fa fa-phone"></i><span> {{ entity.telephone }}</span>*/
/* */
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         <div class="right col-xs-5 text-center">*/
/*                             <img src="{{ asset('design/dist/img/user.png')}}" alt="" class="img-circle img-responsive">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-12 bottom ">*/
/*                         <div class="col-xs-12 emphasis">*/
/*                         {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_COMMERCIAL')  %}*/
/*                             <a class="btn btn-success btn-xs" href="{{ path('client_show', { 'id': entity.id }) }}">*/
/*                                 <i class="fa fa-user">  </i> Voir plus</a>*/
/*                             <a class="btn btn-success btn-xs" href="{{ path('client_edit', { 'id': entity.id }) }}">*/
/*                                 <i class="fa fa-edit">  </i> Modifier</a>*/
/* */
/*                             <a class="btn btn-primary btn-xs" href="{{ path('produit', { 'idcli': entity.id}) }}">*/
/*                                 <i class="fa fa-cog">  </i> Produits</a>*/
/*                             <a class="btn btn-primary btn-xs" href="{{ path('facture_new', { 'idclient': entity.id, 'etat': 'facture' }) }}">*/
/*                                 <i class="fa fa-adjust">  </i> Facture*/
/*                             </a>*/
/* */
/*                             <div class="divider"></div>*/
/*                             */
/*                         {% endif %}*/
/*                             <div class="col-xs-12 emphasis">*/
/*                                 <a class="btn btn-danger btn-xs" href="{{ path('facture', { 'idcli': entity.id, 'etat': 'facture' }) }}">*/
/*                                     <i class="fa fa-calculator">  </i> Encaissement</a>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/*     <button type="button" class="clientBTN btn btn-success" data-toggle="modal" data-target=".client-modal-lg">Nouveau Client</button>*/
/* */
/*     <hr />*/
/* */
/* */
/* */
/*     {# le modal de gestion de client #}*/
/* */
/*     <div class="modal fade client-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content">*/
/*                 {{ form_start(form) }}*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="myModalLabel2">Ajout Client</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <div class="row">*/
/*                         <div class="col-md-5 col-md-offset-1" >*/
/*                             {{ form_row(form.categorie) }}*/
/*                             {{ form_row(form.nom) }}*/
/*                             {{ form_row(form.adresse) }}*/
/*                             {{ form_row(form.telephone) }}*/
/*                             {{ form_row(form.mail) }}*/
/*                             {{ form_row(form.siteweb) }}*/
/*                             {{ form_row(form.activite) }}*/
/*                         </div>*/
/*                         <div class="col-md-5">*/
/*                             {{ form_rest(form) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {{ form_widget(form._token) }} */
/*                     {{ form_end(form, {'render_rest': false})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script src="{{ asset('design/dist/js/instafilta.js') }}"></script>*/
/*     <script>*/
/*         $('#rechercheClient').instaFilta({*/
/*             targets: '.clientItem',*/
/*             sections: '.client',*/
/*             hideEmptySections: true,*/
/*             beginsWith: false,*/
/*             caseSensitive: false,*/
/*             typeDelay: 0*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
