<?php

/* VentesBundle:Operation:new.html.twig */
class __TwigTemplate_93e6f932c04e10508ebfb454a43a1dd84ea0fba8ca5cb1bdf8fae207d3d935d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Operation:new.html.twig", 1);
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
        $__internal_7d6056ef4f2a4a96f0f0cba6e6118543d2546d04c9b9052a7240267c612a7979 = $this->env->getExtension("native_profiler");
        $__internal_7d6056ef4f2a4a96f0f0cba6e6118543d2546d04c9b9052a7240267c612a7979->enter($__internal_7d6056ef4f2a4a96f0f0cba6e6118543d2546d04c9b9052a7240267c612a7979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Operation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6056ef4f2a4a96f0f0cba6e6118543d2546d04c9b9052a7240267c612a7979->leave($__internal_7d6056ef4f2a4a96f0f0cba6e6118543d2546d04c9b9052a7240267c612a7979_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_4a98afb7cf8c0fe689ac01bdae3e3113d531ae85255af500a98e62df40bca085 = $this->env->getExtension("native_profiler");
        $__internal_4a98afb7cf8c0fe689ac01bdae3e3113d531ae85255af500a98e62df40bca085->enter($__internal_4a98afb7cf8c0fe689ac01bdae3e3113d531ae85255af500a98e62df40bca085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        // line 4
        echo "    <h4>Nouvelle opération</h4>
    <div class=\"row\">
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"col-md-6\">
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "flux", array()), 'row');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nature", array()), 'row');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOperation", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionpersonres", array()), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'row');
        echo "
        </div>
        <div class=\"col-md-12\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>
        <div class=\"col-md-12\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("label" => "Valider", "attr" => array("class" => "btn btn-primary margin")));
        echo "
        </div>
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_4a98afb7cf8c0fe689ac01bdae3e3113d531ae85255af500a98e62df40bca085->leave($__internal_4a98afb7cf8c0fe689ac01bdae3e3113d531ae85255af500a98e62df40bca085_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Operation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  91 => 23,  85 => 20,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %}*/
/*     <h4>Nouvelle opération</h4>*/
/*     <div class="row">*/
/*         {{ form_start(form) }}*/
/*         <div class="col-md-6">*/
/*             {{ form_row(form.flux) }}*/
/*             {{ form_row(form.nature) }}*/
/*             {{ form_row(form.dateOperation) }}*/
/*             {{ form_row(form.nom) }}*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {{ form_row(form.fonctionpersonres) }}*/
/*             {{ form_row(form.telephone) }}*/
/*             {{ form_row(form.montant) }}*/
/*             {{ form_row(form.libelle) }}*/
/*         </div>*/
/*         <div class="col-md-12">*/
/*             {{ form_row(form.description) }}*/
/*         </div>*/
/*         <div class="col-md-12">*/
/*             {{ form_row(form.submit, {'label':'Valider', 'attr':{'class':'btn btn-primary margin'} }) }}*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
