<?php

/* GestionBundle:Employe:edit.html.twig */
class __TwigTemplate_565ef5bbb040d043dcc18345f7e79d7e5144735597843a51c6d4b977b6879e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Employe:edit.html.twig", 1);
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
    <h3>Modification employé</h3>

    <div class=\"row\">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        <div class=\"col-md-4\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "civilitemp", array()), 'row', array("label" => "Civilité"));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nomemp", array()), 'row', array("label" => "Nom Employé"));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "prenomemp", array()), 'row', array("label" => "Prenom Employé"));
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "matemp", array()), 'row', array("label" => "Matricule Employé"));
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "genremp", array()), 'row', array("label" => "Genre Employé"));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "natemp", array()), 'row', array("label" => "Nationalité Employé"));
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dobemp", array()), 'row', array("label" => "Date de Naissance"));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lieuemp", array()), 'row', array("label" => "Lieu"));
        echo "

        </div>
        <div class=\"col-md-4\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "lieuemp", array()), 'row', array("label" => "Lieu"));
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "statuemp", array()), 'row', array("label" => "Status matrimonial"));
        echo " 
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "adressemp", array()), 'row', array("label" => "Adresse"));
        echo " 
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nbreftemp", array()), 'row', array("label" => "Nombre enfant"));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fonction", array()), 'row');
        echo "\t 
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "etude", array()), 'row');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "grade", array()), 'row');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "service", array()), 'row');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "salbase", array()), 'row', array("label" => "Salaire de base"));
        echo "

        </div>

        <div class=\"col-md-4\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "celemp", array()), 'row', array("label" => "Cellulaire Employé"));
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telemp", array()), 'row', array("label" => "Telephone Employé"));
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "emailemp", array()), 'row', array("label" => "Email Employé"));
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "perscont", array()), 'row', array("label" => "Personne à contacter"));
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "telpers", array()), 'row', array("label" => "Téléphone"));
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "celpers", array()), 'row', array("label" => "Cellulaire"));
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "filiationemp", array()), 'row', array("label" => "Affiliation"));
        echo "
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "file", array()), 'row', array("label" => "Photo de profil (100 * 100)"));
        echo " 
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "_token", array()), 'widget');
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "submit", array()), 'row');
        echo "
        </div>
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
    </div>
    <div class=\"divider\"></div>
    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("employe");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-cancel m-right-xs\"></i>
        Retour
    </a>
";
    }

    public function getTemplateName()
    {
        return "GestionBundle:Employe:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  157 => 44,  152 => 42,  148 => 41,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %} */
/*     <h3>Modification employé</h3>*/
/* */
/*     <div class="row">*/
/*         {{ form_start(edit_form) }}*/
/*         <div class="col-md-4">*/
/*             {{ form_row(edit_form.civilitemp, {'label':'Civilité'}) }}*/
/*             {{ form_row(edit_form.nomemp, {'label':'Nom Employé'}) }}*/
/*             {{ form_row(edit_form.prenomemp, {'label':'Prenom Employé'}) }}*/
/*             {{ form_row(edit_form.matemp, {'label':'Matricule Employé'}) }}*/
/*             {{ form_row(edit_form.genremp, {'label':'Genre Employé'}) }}*/
/*             {{ form_row(edit_form.natemp, {'label':'Nationalité Employé'}) }}*/
/*             {{ form_row(edit_form.dobemp, {'label':'Date de Naissance'}) }}*/
/*             {{ form_row(edit_form.lieuemp, {'label':'Lieu'}) }}*/
/* */
/*         </div>*/
/*         <div class="col-md-4">*/
/*             {{ form_row(edit_form.lieuemp, {'label':'Lieu'}) }}*/
/*             {{ form_row(edit_form.statuemp, {'label':'Status matrimonial'}) }} */
/*             {{ form_row(edit_form.adressemp, {'label':'Adresse'}) }} */
/*             {{ form_row(edit_form.nbreftemp, {'label':'Nombre enfant'}) }}*/
/*             {{ form_row(edit_form.fonction) }}	 */
/*             {{ form_row(edit_form.etude) }}*/
/*             {{ form_row(edit_form.grade) }}*/
/*             {{ form_row(edit_form.service)}}*/
/*             {{ form_row(edit_form.salbase, {'label':'Salaire de base'})}}*/
/* */
/*         </div>*/
/* */
/*         <div class="col-md-4">*/
/*             {{ form_row(edit_form.celemp, {'label':'Cellulaire Employé'}) }}*/
/*             {{ form_row(edit_form.telemp, {'label':'Telephone Employé'}) }}*/
/*             {{ form_row(edit_form.emailemp, {'label':'Email Employé'}) }}*/
/*             {{ form_row(edit_form.perscont, {'label':'Personne à contacter'}) }}*/
/*             {{ form_row(edit_form.telpers, {'label':'Téléphone'}) }}*/
/*             {{ form_row(edit_form.celpers, {'label':'Cellulaire'}) }}*/
/*             {{ form_row(edit_form.filiationemp, {'label':'Affiliation'}) }}*/
/*             {{ form_row(edit_form.file, {'label':'Photo de profil (100 * 100)'}) }} */
/*             {{ form_widget(edit_form._token) }}*/
/*             {{ form_row(edit_form.submit) }}*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/*     <div class="divider"></div>*/
/*     <a href="{{ path('employe') }}" class="btn btn-success"><i class="fa fa-cancel m-right-xs"></i>*/
/*         Retour*/
/*     </a>*/
/* {% endblock %}*/
/* */
