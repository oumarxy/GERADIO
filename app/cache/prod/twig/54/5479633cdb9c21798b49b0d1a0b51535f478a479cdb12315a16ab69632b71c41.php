<?php

/* GestionBundle:Employe:index.html.twig */
class __TwigTemplate_cafe45bcaf04c787d73c0d9ba5f67eacc4b2e4ff5358c54386a31e4302c292be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Employe:index.html.twig", 1);
        $this->blocks = array(
            'container_gestion' => array($this, 'block_container_gestion'),
            'javascript' => array($this, 'block_javascript'),
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
        echo " 
    <h3>Listes des employés</h3>

    <a class=\"btn btn-primary\"  href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("employe_new");
        echo "\">
        Nouvel employé
    </a>
    ";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : null)) > 0)) {
            // line 10
            echo "
        <a class=\"btn btn-primary\"  href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("employe_pdf");
            echo "\" target=\"_blank\">
            Imprimer liste des Employés
        </a>
    ";
        } else {
            // line 15
            echo "        <a class=\"btn btn-default\">
            Imprimer liste des Employés
        </a>
    ";
        }
        // line 19
        echo "
    <div class=\"divider\"></div>
    <input type=\"text\" class=\"pull-right input-sm\" id=\"rechercheEmploye\" placeholder=\"Recherche...\" />
    <hr />
    <hr />
    <div class=\"row\">

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "
            <div class=\"col-md-4 employe\">
                <!-- Widget: user widget style 1 -->
                <div class=\"well profile_view \">
                    <div class=\"col-sm-12\">
                        <h4  class=\"widget-user-username employeItem\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomemp", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenomemp", array()), "html", null, true);
            echo "</h4>
                        <div class=\"left col-xs-7\">
                            <h5 class=\"widget-user-desc\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fonction", array()), "html", null, true);
            echo "</h5>
                            <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "emailemp", array()), "html", null, true);
            echo "</p>
                            <i class=\"fa fa-phone\"></i> <span> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celemp", array()), "html", null, true);
            echo " </span>

                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"right col-xs-5 text-center\">
                            ";
            // line 41
            if ( !(null === $this->getAttribute($context["entity"], "path", array()))) {
                // line 42
                echo "                                <img class=\"img-circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/" . $this->getAttribute($context["entity"], "path", array()))), "html", null, true);
                echo "\"  width=\"100\" height=\"100\">
                            ";
            } else {
                // line 44
                echo "                                <img class=\"img-circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profiles/default.png"), "html", null, true);
                echo "\"  width=\"100\" height=\"100\">
                            ";
            }
            // line 46
            echo "                        </div>
                    </div>
                    <div class=\"box-footer\">
                        <div class=\"col-xs-12 col-sm-12 emphasis\">
                            <a class=\"btn btn-success btn-xs\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employe_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-eye\"></i> Voir profil
                            </a>

                            <a class=\"btn btn-success btn-xs\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employe_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-edit\"> </i> Editer
                            </a>
                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contrat", array("idemp" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                Contrat
                            </a>

                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence", array("idemp" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-sun-o\"> </i> Absence
                            </a>
                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conge", array("idemp" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-sun-o\"> </i> Congé
                            </a>
                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mission", array("idemp" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                Mission
                            </a>

                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sanction", array("idemp" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                Sanction
                            </a>

                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque", array("idemp" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-euro\"> </i> Salaire
                            </a>
                            <a class=\"btn btn-primary btn-xs\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cvupload", array("idemp" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-file-o\"> </i> CV
                            </a>

                        </div>

                    </div><!-- /.widget-user -->
                </div><!-- /.col -->


            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "   

    ";
    }

    // line 94
    public function block_javascript($context, array $blocks = array())
    {
        // line 95
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/instafilta.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('#rechercheEmploye').instaFilta({
            targets: '.employeItem',
            sections: '.employe',
            hideEmptySections: true,
            beginsWith: false,
            caseSensitive: false,
            typeDelay: 0
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "GestionBundle:Employe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 95,  201 => 94,  195 => 91,  175 => 78,  169 => 75,  162 => 71,  155 => 67,  149 => 64,  143 => 61,  136 => 57,  130 => 54,  123 => 50,  117 => 46,  111 => 44,  105 => 42,  103 => 41,  95 => 36,  91 => 35,  87 => 34,  80 => 32,  73 => 27,  69 => 26,  60 => 19,  54 => 15,  47 => 11,  44 => 10,  42 => 9,  36 => 6,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %} */
/*     <h3>Listes des employés</h3>*/
/* */
/*     <a class="btn btn-primary"  href="{{ path('employe_new') }}">*/
/*         Nouvel employé*/
/*     </a>*/
/*     {% if entities|length > 0 %}*/
/* */
/*         <a class="btn btn-primary"  href="{{ path('employe_pdf') }}" target="_blank">*/
/*             Imprimer liste des Employés*/
/*         </a>*/
/*     {% else %}*/
/*         <a class="btn btn-default">*/
/*             Imprimer liste des Employés*/
/*         </a>*/
/*     {% endif %}*/
/* */
/*     <div class="divider"></div>*/
/*     <input type="text" class="pull-right input-sm" id="rechercheEmploye" placeholder="Recherche..." />*/
/*     <hr />*/
/*     <hr />*/
/*     <div class="row">*/
/* */
/*         {% for entity in entities %}*/
/* */
/*             <div class="col-md-4 employe">*/
/*                 <!-- Widget: user widget style 1 -->*/
/*                 <div class="well profile_view ">*/
/*                     <div class="col-sm-12">*/
/*                         <h4  class="widget-user-username employeItem">{{ entity.nomemp }} {{ entity.prenomemp }}</h4>*/
/*                         <div class="left col-xs-7">*/
/*                             <h5 class="widget-user-desc">{{ entity.fonction }}</h5>*/
/*                             <p>{{ entity.emailemp }}</p>*/
/*                             <i class="fa fa-phone"></i> <span> {{ entity.celemp }} </span>*/
/* */
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         <div class="right col-xs-5 text-center">*/
/*                             {% if entity.path is not null %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/' ~ entity.path)}}"  width="100" height="100">*/
/*                             {% else %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/default.png')}}"  width="100" height="100">*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="box-footer">*/
/*                         <div class="col-xs-12 col-sm-12 emphasis">*/
/*                             <a class="btn btn-success btn-xs" href="{{ path('employe_show', { 'id': entity.id }) }}">*/
/*                                 <i class="fa fa-eye"></i> Voir profil*/
/*                             </a>*/
/* */
/*                             <a class="btn btn-success btn-xs" href="{{ path('employe_edit', { 'id': entity.id }) }}">*/
/*                                 <i class="fa fa-edit"> </i> Editer*/
/*                             </a>*/
/*                             <a class="btn btn-primary btn-xs" href="{{ path('contrat', { 'idemp': entity.id }) }}">*/
/*                                 Contrat*/
/*                             </a>*/
/* */
/*                             <a class="btn btn-primary btn-xs" href="{{ path('absence', { 'idemp': entity.id }) }}">*/
/*                                 <i class="fa fa-sun-o"> </i> Absence*/
/*                             </a>*/
/*                             <a class="btn btn-primary btn-xs" href="{{ path('conge', { 'idemp': entity.id }) }}">*/
/*                                 <i class="fa fa-sun-o"> </i> Congé*/
/*                             </a>*/
/*                             <a class="btn btn-primary btn-xs" href="{{ path('mission', { 'idemp': entity.id }) }}">*/
/*                                 Mission*/
/*                             </a>*/
/* */
/*                             <a class="btn btn-primary btn-xs" href="{{ path('sanction', { 'idemp': entity.id }) }}">*/
/*                                 Sanction*/
/*                             </a>*/
/* */
/*                             <a class="btn btn-primary btn-xs" href="{{ path('banque', {'idemp': entity.id}) }}">*/
/*                                 <i class="fa fa-euro"> </i> Salaire*/
/*                             </a>*/
/*                             <a class="btn btn-primary btn-xs" href="{{ path('cvupload', {'idemp': entity.id}) }}">*/
/*                                 <i class="fa fa-file-o"> </i> CV*/
/*                             </a>*/
/* */
/*                         </div>*/
/* */
/*                     </div><!-- /.widget-user -->*/
/*                 </div><!-- /.col -->*/
/* */
/* */
/*             </div>*/
/* */
/* */
/*         {% endfor %}   */
/* */
/*     {% endblock %}*/
/* {% block javascript %}*/
/*     <script src="{{ asset('design/dist/js/instafilta.js') }}"></script>*/
/*     <script>*/
/*         $('#rechercheEmploye').instaFilta({*/
/*             targets: '.employeItem',*/
/*             sections: '.employe',*/
/*             hideEmptySections: true,*/
/*             beginsWith: false,*/
/*             caseSensitive: false,*/
/*             typeDelay: 0*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
