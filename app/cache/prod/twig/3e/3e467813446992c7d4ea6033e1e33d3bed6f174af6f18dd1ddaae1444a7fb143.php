<?php

/* VentesBundle::layout_ventes.html.twig */
class __TwigTemplate_5c69f02ccc39586c9060bdd2a1ec29bf548e680c5689de42cc71ffbe813d3838 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container_app($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_container_ventes($context, array $blocks = array())
    {
        echo "                 

            ";
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
        return array (  52 => 10,  42 => 12,  40 => 10,  29 => 3,  11 => 1,);
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
