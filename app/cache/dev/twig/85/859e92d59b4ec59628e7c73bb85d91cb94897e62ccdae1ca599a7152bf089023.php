<?php

/* VentesBundle::sections_ventes/collection_prod.html.twig */
class __TwigTemplate_8ca124c94e50985fd46bfca83178b0d6d9d3c09dacb59c3b0c1559dc9e17ea6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06885b007afc23f374be9a331624c99456f6791ded8ba2f03bf324cf032b8416 = $this->env->getExtension("native_profiler");
        $__internal_06885b007afc23f374be9a331624c99456f6791ded8ba2f03bf324cf032b8416->enter($__internal_06885b007afc23f374be9a331624c99456f6791ded8ba2f03bf324cf032b8416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle::sections_ventes/collection_prod.html.twig"));

        // line 1
        echo "
<td>";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_prod"]) ? $context["form_prod"] : $this->getContext($context, "form_prod")), "refProd", array()), 'widget', array("attr" => array("class" => "no-padding")));
        echo "</td>

<td class=\"produit\" >";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_prod"]) ? $context["form_prod"] : $this->getContext($context, "form_prod")), "libelle", array()), 'widget');
        echo "</td>

<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_prod"]) ? $context["form_prod"] : $this->getContext($context, "form_prod")), "prixHT", array()), 'widget', array("attr" => array("class" => "no-padding")));
        echo "</td>

<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_prod"]) ? $context["form_prod"] : $this->getContext($context, "form_prod")), "quantite", array()), 'widget');
        echo "</td>
";
        
        $__internal_06885b007afc23f374be9a331624c99456f6791ded8ba2f03bf324cf032b8416->leave($__internal_06885b007afc23f374be9a331624c99456f6791ded8ba2f03bf324cf032b8416_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle::sections_ventes/collection_prod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* */
/* <td>{{ form_widget(form_prod.refProd, {'attr': {'class': 'no-padding'} })  }}</td>*/
/* */
/* <td class="produit" >{{ form_widget(form_prod.libelle)  }}</td>*/
/* */
/* <td>{{ form_widget(form_prod.prixHT, {'attr': {'class': 'no-padding'} })  }}</td>*/
/* */
/* <td>{{ form_widget(form_prod.quantite)  }}</td>*/
/* */
