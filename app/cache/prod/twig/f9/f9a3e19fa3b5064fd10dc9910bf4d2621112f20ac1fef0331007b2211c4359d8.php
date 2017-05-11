<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_84f90c55bf62ab205b01e2290c20cad65568d40ab7e4b8adffeaef9ebb566580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error500.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"nav-md\">

    <div class=\"container body\">

        <div class=\"main_container\">

            <!-- page content -->
            <div class=\"col-md-12\">
                <div class=\"col-middle\">
                    <div class=\"text-center text-center\">
                        <h1 class=\"error-number\">500</h1>
                        <h2>Désolé, nous n'avons pas pu traiter votre requête.</h2>
                        <p>Vérifiez les valeurs saisies ou adressez vous au service informatique.</p>
                        <div class=\"clearfix\"></div>
                        <h2><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ventes_accueil");
        echo "\">Retour à l'accueil</<a></h2>
                   
                    </div>
                </div>
            </div>
            <!-- /page content -->

        </div>
        <!-- footer content -->
    </div>
    <!-- /footer content -->
</div>

";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* */
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="nav-md">*/
/* */
/*     <div class="container body">*/
/* */
/*         <div class="main_container">*/
/* */
/*             <!-- page content -->*/
/*             <div class="col-md-12">*/
/*                 <div class="col-middle">*/
/*                     <div class="text-center text-center">*/
/*                         <h1 class="error-number">500</h1>*/
/*                         <h2>Désolé, nous n'avons pas pu traiter votre requête.</h2>*/
/*                         <p>Vérifiez les valeurs saisies ou adressez vous au service informatique.</p>*/
/*                         <div class="clearfix"></div>*/
/*                         <h2><a href="{{ path('ventes_accueil')}}">Retour à l'accueil</<a></h2>*/
/*                    */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /page content -->*/
/* */
/*         </div>*/
/*         <!-- footer content -->*/
/*     </div>*/
/*     <!-- /footer content -->*/
/* </div>*/
/* */
/* {% endblock body %}*/
/* */
