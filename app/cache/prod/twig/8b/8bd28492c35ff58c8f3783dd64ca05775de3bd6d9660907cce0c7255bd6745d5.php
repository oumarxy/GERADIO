<?php

/* base.html.twig */
class __TwigTemplate_2c0926875abfe46daf0ad288914fddef5af56a2125c43e64a0fb7cdc5cf49e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " ~ Online</title>

        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/design/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/design/bootstrap/css/jquery.datetimepicker.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/design/bootstrap/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/design/dist/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/design/dist/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/design/dist/css/add.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("ge.png"), "html", null, true);
        echo "\" />
</head>
<body class=\"nav-md\">

    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/bootstrap/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/bootstrap/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/bootstrap/js/jquery.datetimepicker.full.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/add.js"), "html", null, true);
        echo "\"></script>
";
        // line 31
        $this->displayBlock('javascript', $context, $blocks);
        // line 32
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ge Radio ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 31,  133 => 19,  128 => 14,  122 => 5,  116 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  71 => 20,  69 => 19,  61 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Ge Radio {% endblock %} ~ Online</title>*/
/* */
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <link rel="stylesheet" href="{{asset('/design/bootstrap/css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('/design/bootstrap/css/jquery.datetimepicker.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('/design/bootstrap/css/dataTables.bootstrap.min.css')}}">*/
/*         <link href="{{asset('/design/dist/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('/design/dist/css/custom.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('/design/dist/css/add.css')}}" rel="stylesheet">*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{asset('ge.png')}}" />*/
/* </head>*/
/* <body class="nav-md">*/
/* */
/*     {% block body %} {% endblock %}*/
/* */
/*     <script src="{{asset('design/bootstrap/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('design/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('design/bootstrap/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script src="{{asset('design/bootstrap/js/dataTables.bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('design/bootstrap/js/jquery.datetimepicker.full.min.js')}}"></script>*/
/*     <script src="{{asset('design/dist/js/custom.js')}}"></script>*/
/*     <script src="{{asset('design/dist/js/jquery.inputmask.bundle.min.js')}}"></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <script src="{{asset('design/dist/js/add.js')}}"></script>*/
/* {% block javascript %} {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
