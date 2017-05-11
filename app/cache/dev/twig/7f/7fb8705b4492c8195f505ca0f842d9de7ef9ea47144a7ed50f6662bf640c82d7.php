<?php

/* VentesBundle::layout_ventes.html.twig */
class __TwigTemplate_b90f07693c22ccce970db2e6fea76f3875a2f0df82724f8bf94cca6612315a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout_app.html.twig", "VentesBundle::layout_ventes.html.twig", 1);
        $this->blocks = array(
            'container_app' => array($this, 'block_container_app'),
            'container_ventes' => array($this, 'block_container_ventes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout_app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06c3f4bcd3f00361f4b5e39c1ff54dc4d90e2b67eee4245d416573e4d2097303 = $this->env->getExtension("native_profiler");
        $__internal_06c3f4bcd3f00361f4b5e39c1ff54dc4d90e2b67eee4245d416573e4d2097303->enter($__internal_06c3f4bcd3f00361f4b5e39c1ff54dc4d90e2b67eee4245d416573e4d2097303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle::layout_ventes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c3f4bcd3f00361f4b5e39c1ff54dc4d90e2b67eee4245d416573e4d2097303->leave($__internal_06c3f4bcd3f00361f4b5e39c1ff54dc4d90e2b67eee4245d416573e4d2097303_prof);

    }

    // line 3
    public function block_container_app($context, array $blocks = array())
    {
        $__internal_055cd84bdfe8796f77c09829a08f5d6aa0dcac8c84f63819295617384f91d723 = $this->env->getExtension("native_profiler");
        $__internal_055cd84bdfe8796f77c09829a08f5d6aa0dcac8c84f63819295617384f91d723->enter($__internal_055cd84bdfe8796f77c09829a08f5d6aa0dcac8c84f63819295617384f91d723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_app"));

        echo "  
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
      
        <!-- Main content -->
        <section class=\"content\" style=\"margin-bottom: 40px;\">            
           
            ";
        // line 10
        $this->displayBlock('container_ventes', $context, $blocks);
        // line 12
        echo " 
       
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
";
        
        $__internal_055cd84bdfe8796f77c09829a08f5d6aa0dcac8c84f63819295617384f91d723->leave($__internal_055cd84bdfe8796f77c09829a08f5d6aa0dcac8c84f63819295617384f91d723_prof);

    }

    // line 10
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_937fc5e081d7a474b064a92e7fb01c46ec7a55b24e6722f0d061113f1957de5c = $this->env->getExtension("native_profiler");
        $__internal_937fc5e081d7a474b064a92e7fb01c46ec7a55b24e6722f0d061113f1957de5c->enter($__internal_937fc5e081d7a474b064a92e7fb01c46ec7a55b24e6722f0d061113f1957de5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        echo "                 

            ";
        
        $__internal_937fc5e081d7a474b064a92e7fb01c46ec7a55b24e6722f0d061113f1957de5c->leave($__internal_937fc5e081d7a474b064a92e7fb01c46ec7a55b24e6722f0d061113f1957de5c_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle::layout_ventes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  51 => 12,  49 => 10,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layout_app.html.twig' %}*/
/* */
/* {% block container_app %}  */
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*       */
/*         <!-- Main content -->*/
/*         <section class="content" style="margin-bottom: 40px;">            */
/*            */
/*             {% block container_ventes %}                 */
/* */
/*             {% endblock %} */
/*        */
/*         </section>*/
/*         <!-- /.content -->*/
/*     </div>*/
/*     <!-- /.content-wrapper -->*/
/* {% endblock container_app %}*/
/* */
/* */
/* */
/* */
