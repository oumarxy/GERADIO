<?php

/* ::layout/layout_app.html.twig */
class __TwigTemplate_64ff4e8aa666c26e2e2f260f00b581d08db1c5a31819f459300abda87f9fe99e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 19
    public function block_container_app($context, array $blocks = array())
    {
        echo "\t";
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
        return array (  79 => 19,  64 => 23,  61 => 22,  58 => 20,  56 => 19,  52 => 17,  48 => 14,  45 => 13,  39 => 10,  32 => 4,  29 => 3,  11 => 1,);
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
