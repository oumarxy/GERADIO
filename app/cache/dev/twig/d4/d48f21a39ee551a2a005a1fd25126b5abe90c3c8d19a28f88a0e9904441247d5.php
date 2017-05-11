<?php

/* GestionBundle::layout_gestion.html.twig */
class __TwigTemplate_d09e916599bb84056cf1b1598f04b924c6cb54b05946a6457b2c7ed89c0ae179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout_app.html.twig", "GestionBundle::layout_gestion.html.twig", 1);
        $this->blocks = array(
            'container_app' => array($this, 'block_container_app'),
            'container_gestion' => array($this, 'block_container_gestion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout_app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_554f533921d4390a5183a88ec80617daf48c10c9126477bdba642535516bb71e = $this->env->getExtension("native_profiler");
        $__internal_554f533921d4390a5183a88ec80617daf48c10c9126477bdba642535516bb71e->enter($__internal_554f533921d4390a5183a88ec80617daf48c10c9126477bdba642535516bb71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle::layout_gestion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554f533921d4390a5183a88ec80617daf48c10c9126477bdba642535516bb71e->leave($__internal_554f533921d4390a5183a88ec80617daf48c10c9126477bdba642535516bb71e_prof);

    }

    // line 10
    public function block_container_app($context, array $blocks = array())
    {
        $__internal_3a782c89093a4b63ee0a7919a29d78b1bda0a4afc277fade9c563c43007a4fd9 = $this->env->getExtension("native_profiler");
        $__internal_3a782c89093a4b63ee0a7919a29d78b1bda0a4afc277fade9c563c43007a4fd9->enter($__internal_3a782c89093a4b63ee0a7919a29d78b1bda0a4afc277fade9c563c43007a4fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_app"));

        echo "  
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
       
        <!-- Main content -->
        <section class=\"content\">            
            ";
        // line 16
        $this->displayBlock('container_gestion', $context, $blocks);
        // line 18
        echo " 
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
";
        
        $__internal_3a782c89093a4b63ee0a7919a29d78b1bda0a4afc277fade9c563c43007a4fd9->leave($__internal_3a782c89093a4b63ee0a7919a29d78b1bda0a4afc277fade9c563c43007a4fd9_prof);

    }

    // line 16
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_799ef156462051f1720dc79580f0cb9186f71ab860b9478ed5cc8713e8c85849 = $this->env->getExtension("native_profiler");
        $__internal_799ef156462051f1720dc79580f0cb9186f71ab860b9478ed5cc8713e8c85849->enter($__internal_799ef156462051f1720dc79580f0cb9186f71ab860b9478ed5cc8713e8c85849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        echo "                 
                                            
            ";
        
        $__internal_799ef156462051f1720dc79580f0cb9186f71ab860b9478ed5cc8713e8c85849->leave($__internal_799ef156462051f1720dc79580f0cb9186f71ab860b9478ed5cc8713e8c85849_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle::layout_gestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  50 => 18,  48 => 16,  35 => 10,  11 => 1,);
    }
}
/* {% extends '::layout/layout_app.html.twig' %}*/
/* */
/*  {#    */
/*     /***/
/*     **/
/*     *  Environnement commun */
/*     **/
/*     **//* */
/* #}*/
/* {% block container_app %}  */
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*        */
/*         <!-- Main content -->*/
/*         <section class="content">            */
/*             {% block container_gestion %}                 */
/*                                             */
/*             {% endblock container_gestion %} */
/*         </section>*/
/*         <!-- /.content -->*/
/*     </div>*/
/*     <!-- /.content-wrapper -->*/
/* {% endblock container_app %}*/
/* */
/* */
/* */
/* */
