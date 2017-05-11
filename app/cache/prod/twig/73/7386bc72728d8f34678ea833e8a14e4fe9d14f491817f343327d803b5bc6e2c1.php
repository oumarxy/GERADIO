<?php

/* @Ventes/Home/accueil.html.twig */
class __TwigTemplate_7e7901eefb5d99f5d02b9be7ed42ec9ab43acba72744b321b6d2c5b814e53215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "@Ventes/Home/accueil.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        echo " 
    <style type=\"text/css\">
        .right_col {
            min-height: 650px !important;
        }
    </style>
    <div >
        <img style=\"width: 100%; height: 100%;\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/img/geradio.png"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"image\">
    </div> 
";
    }

    public function getTemplateName()
    {
        return "@Ventes/Home/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  28 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %} */
/*     <style type="text/css">*/
/*         .right_col {*/
/*             min-height: 650px !important;*/
/*         }*/
/*     </style>*/
/*     <div >*/
/*         <img style="width: 100%; height: 100%;" src="{{asset('design/dist/img/geradio.png')}}" alt="avatar" class="image">*/
/*     </div> */
/* {% endblock %}*/
/* */
