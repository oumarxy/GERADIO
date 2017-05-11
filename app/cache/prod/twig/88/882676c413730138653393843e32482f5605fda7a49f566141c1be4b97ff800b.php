<?php

/* GestionBundle::layout_gestion.html.twig */
class __TwigTemplate_3ec1c7ef528a97def8385c6deeb92a53626ebd2aeb42f067fc24a8f3839996dd extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_container_app($context, array $blocks = array())
    {
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
    }

    // line 16
    public function block_container_gestion($context, array $blocks = array())
    {
        echo "                 
                                            
            ";
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
        return array (  50 => 16,  41 => 18,  39 => 16,  29 => 10,  11 => 1,);
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
