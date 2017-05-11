<?php

/* GestionBundle:Employe:show.html.twig */
class __TwigTemplate_b9f6fafc8f3017a2164edbb83ae32ffca954c3f1e0932f686681b367356efba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Employe:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        echo " 
    <h3>Infos employé</h3>

    <div class=\"row\">
        <div class=\"col-md-3 col-sm-3 col-xs-3 profile_left\">

            <div class=\"profile_img\">

                <!-- end of image cropping -->
                <div id=\"crop-avatar\" >
                    <!-- Current avatar -->
                    <div class=\"avatar-view\"  title=\"Change the avatar\">
                         ";
        // line 15
        if ( !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "path", array()))) {
            // line 16
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "path", array()))), "html", null, true);
            echo "\"  width=\"200\" height=\"200\">
                            ";
        } else {
            // line 18
            echo "                                <img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/profiles/default.png"), "html", null, true);
            echo "\"  width=\"200\" height=\"200\">
                            ";
        }
        // line 20
        echo "                    </div>
                </div>
                <!-- end of image cropping -->

            </div>
            <h3>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nomemp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prenomemp", array()), "html", null, true);
        echo "</h3>
            <h4> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "grade", array()), "html", null, true);
        echo " -  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fonction", array()), "html", null, true);
        echo " </h4>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employe_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-edit m-right-xs\"></i> Modifier</a>

            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("employe");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-cancel m-right-xs\"></i> Retour</a> 

        </div>

        <div class=\"col-md-6 col-sm-6 col-xs-12 profile_right\">
            <table class=\"table table-striped table-bordered\">
                <tbody>
                    <tr>
                        <th>Matricule</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "matemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Sexe</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "genremp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date et lieu de naissance</th>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dobemp", array()), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lieuemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Situation matrimonial</th>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "statuemp", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nbreftemp", array()), "html", null, true);
        echo " enfant</td>
                    </tr>
                    <tr>
                        <th>Niveau d'etude</th>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etude", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>telephone</th>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "telpers", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Cellulaire</th>
                        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "celemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "emailemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "adressemp", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Personne à contacter</th>
                        <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "perscont", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "celpers", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "filiationemp", array()), "html", null, true);
        echo "</td>
                    </tr>


                </tbody>
            </table>

        </div>


    </div>


";
    }

    public function getTemplateName()
    {
        return "GestionBundle:Employe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 74,  154 => 70,  147 => 66,  140 => 62,  133 => 58,  126 => 54,  117 => 50,  108 => 46,  101 => 42,  94 => 38,  82 => 29,  77 => 27,  71 => 26,  65 => 25,  58 => 20,  52 => 18,  46 => 16,  44 => 15,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %} */
/*     <h3>Infos employé</h3>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-3 col-sm-3 col-xs-3 profile_left">*/
/* */
/*             <div class="profile_img">*/
/* */
/*                 <!-- end of image cropping -->*/
/*                 <div id="crop-avatar" >*/
/*                     <!-- Current avatar -->*/
/*                     <div class="avatar-view"  title="Change the avatar">*/
/*                          {% if entity.path is not null %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/' ~ entity.path)}}"  width="200" height="200">*/
/*                             {% else %}*/
/*                                 <img class="img-circle" src="{{ asset('uploads/profiles/default.png')}}"  width="200" height="200">*/
/*                             {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- end of image cropping -->*/
/* */
/*             </div>*/
/*             <h3>{{ entity.nomemp }} {{ entity.prenomemp }}</h3>*/
/*             <h4> {{ entity.grade}} -  {{ entity.fonction}} </h4>*/
/*             <a href="{{ path('employe_edit', { 'id': entity.id }) }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i> Modifier</a>*/
/* */
/*             <a href="{{ path('employe') }}" class="btn btn-success"><i class="fa fa-cancel m-right-xs"></i> Retour</a> */
/* */
/*         </div>*/
/* */
/*         <div class="col-md-6 col-sm-6 col-xs-12 profile_right">*/
/*             <table class="table table-striped table-bordered">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>Matricule</th>*/
/*                         <td>{{ entity.matemp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Sexe</th>*/
/*                         <td>{{ entity.genremp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Date et lieu de naissance</th>*/
/*                         <td>{{ entity.dobemp |date("d/m/Y")}} à {{ entity.lieuemp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Situation matrimonial</th>*/
/*                         <td>{{ entity.statuemp }} - {{ entity.nbreftemp }} enfant</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Niveau d'etude</th>*/
/*                         <td>{{ entity.etude }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>telephone</th>*/
/*                         <td>{{ entity.telpers }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Cellulaire</th>*/
/*                         <td>{{ entity.celemp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Email</th>*/
/*                         <td> {{ entity.emailemp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Adresse</th>*/
/*                         <td>{{ entity.adressemp }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Personne à contacter</th>*/
/*                         <td>{{ entity.perscont }} - {{ entity.celpers }} - {{ entity.filiationemp }}</td>*/
/*                     </tr>*/
/* */
/* */
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
