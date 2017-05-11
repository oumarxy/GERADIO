<?php

/* ::layout/layout_app.html.twig */
class __TwigTemplate_79625ac88afeaf80663bc89ef286933803b52da28ee8570b79009bdcf0076848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::layout/layout_app.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'container_app' => array($this, 'block_container_app'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49993c0bac172cfb80ae0848f2576037d80c3b9b8cd1ab3d6597158083c9f8fa = $this->env->getExtension("native_profiler");
        $__internal_49993c0bac172cfb80ae0848f2576037d80c3b9b8cd1ab3d6597158083c9f8fa->enter($__internal_49993c0bac172cfb80ae0848f2576037d80c3b9b8cd1ab3d6597158083c9f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout_app.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49993c0bac172cfb80ae0848f2576037d80c3b9b8cd1ab3d6597158083c9f8fa->leave($__internal_49993c0bac172cfb80ae0848f2576037d80c3b9b8cd1ab3d6597158083c9f8fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19fc8a62304f31e8820cce8924617ab629a675dbd0d249e0a5728dcb013b9807 = $this->env->getExtension("native_profiler");
        $__internal_19fc8a62304f31e8820cce8924617ab629a675dbd0d249e0a5728dcb013b9807->enter($__internal_19fc8a62304f31e8820cce8924617ab629a675dbd0d249e0a5728dcb013b9807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container body\">

        <div class=\"main_container\">

            ";
        // line 10
        echo "            ";
        $this->loadTemplate("::sections_app/main_sidebar.html.twig", "::layout/layout_app.html.twig", 10)->display($context);
        echo " 

            ";
        // line 13
        echo "            ";
        $this->loadTemplate("::sections_app/header.html.twig", "::layout/layout_app.html.twig", 13)->display($context);
        // line 14
        echo "

            ";
        // line 17
        echo "            <!-- page content -->
            <div class=\"right_col \" role=\"main\">
                ";
        // line 19
        $this->displayBlock('container_app', $context, $blocks);
        // line 20
        echo "
                ";
        // line 22
        echo "                ";
        $this->loadTemplate("::sections_app/footer.html.twig", "::layout/layout_app.html.twig", 22)->display($context);
        // line 23
        echo "
            </div>

        </div>

                
                
                


 
 ";
        
        $__internal_19fc8a62304f31e8820cce8924617ab629a675dbd0d249e0a5728dcb013b9807->leave($__internal_19fc8a62304f31e8820cce8924617ab629a675dbd0d249e0a5728dcb013b9807_prof);

    }

    // line 19
    public function block_container_app($context, array $blocks = array())
    {
        $__internal_beaa9be21df937f6d6807614ad8d0ee8dfee1d2623900d3cd89dff11cda8e527 = $this->env->getExtension("native_profiler");
        $__internal_beaa9be21df937f6d6807614ad8d0ee8dfee1d2623900d3cd89dff11cda8e527->enter($__internal_beaa9be21df937f6d6807614ad8d0ee8dfee1d2623900d3cd89dff11cda8e527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_app"));

        echo "\t";
        
        $__internal_beaa9be21df937f6d6807614ad8d0ee8dfee1d2623900d3cd89dff11cda8e527->leave($__internal_beaa9be21df937f6d6807614ad8d0ee8dfee1d2623900d3cd89dff11cda8e527_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout_app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  73 => 23,  70 => 22,  67 => 20,  65 => 19,  61 => 17,  57 => 14,  54 => 13,  48 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container body">*/
/* */
/*         <div class="main_container">*/
/* */
/*             {# la sidebar #}*/
/*             {% include "::sections_app/main_sidebar.html.twig" %} */
/* */
/*             {# le header  #}*/
/*             {% include "::sections_app/header.html.twig" %}*/
/* */
/* */
/*             {# le contenu  #}*/
/*             <!-- page content -->*/
/*             <div class="right_col " role="main">*/
/*                 {% block container_app%}	{% endblock container_app %}*/
/* */
/*                 {# le footer #}*/
/*                 {% include "::sections_app/footer.html.twig" %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*                 */
/*                 */
/*                 */
/* */
/* */
/*  */
/*  {% endblock %}*/
/* */
/* */
/*                 */
