<?php

/* base.html.twig */
class __TwigTemplate_b87281903aa6a55d462b166902533f8ed8e75c80d38f821ab5a47a698c065695 extends Twig_Template
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
        $__internal_a94c39e90b8cfb55e52a1ac16d9ee02e602365b4423a55061c7c8a22bcf22d1e = $this->env->getExtension("native_profiler");
        $__internal_a94c39e90b8cfb55e52a1ac16d9ee02e602365b4423a55061c7c8a22bcf22d1e->enter($__internal_a94c39e90b8cfb55e52a1ac16d9ee02e602365b4423a55061c7c8a22bcf22d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a94c39e90b8cfb55e52a1ac16d9ee02e602365b4423a55061c7c8a22bcf22d1e->leave($__internal_a94c39e90b8cfb55e52a1ac16d9ee02e602365b4423a55061c7c8a22bcf22d1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b90fbf6dff623a94f902de0979b092dda2f25f18b236077e58dda52ea08f3cf0 = $this->env->getExtension("native_profiler");
        $__internal_b90fbf6dff623a94f902de0979b092dda2f25f18b236077e58dda52ea08f3cf0->enter($__internal_b90fbf6dff623a94f902de0979b092dda2f25f18b236077e58dda52ea08f3cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ge Radio ";
        
        $__internal_b90fbf6dff623a94f902de0979b092dda2f25f18b236077e58dda52ea08f3cf0->leave($__internal_b90fbf6dff623a94f902de0979b092dda2f25f18b236077e58dda52ea08f3cf0_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9e44a02476563b1a1adcdd318b9cfd0bf67a507455c401b5564f88748a80243 = $this->env->getExtension("native_profiler");
        $__internal_f9e44a02476563b1a1adcdd318b9cfd0bf67a507455c401b5564f88748a80243->enter($__internal_f9e44a02476563b1a1adcdd318b9cfd0bf67a507455c401b5564f88748a80243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f9e44a02476563b1a1adcdd318b9cfd0bf67a507455c401b5564f88748a80243->leave($__internal_f9e44a02476563b1a1adcdd318b9cfd0bf67a507455c401b5564f88748a80243_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_e34d861dbfdf8a06ab8ea278149c10a9af92c20c078ae4f7ac72a62423301d07 = $this->env->getExtension("native_profiler");
        $__internal_e34d861dbfdf8a06ab8ea278149c10a9af92c20c078ae4f7ac72a62423301d07->enter($__internal_e34d861dbfdf8a06ab8ea278149c10a9af92c20c078ae4f7ac72a62423301d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_e34d861dbfdf8a06ab8ea278149c10a9af92c20c078ae4f7ac72a62423301d07->leave($__internal_e34d861dbfdf8a06ab8ea278149c10a9af92c20c078ae4f7ac72a62423301d07_prof);

    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c770eaded22a3bcebf410e75067646b8b46831b089227d8d22cf399cf3434b2d = $this->env->getExtension("native_profiler");
        $__internal_c770eaded22a3bcebf410e75067646b8b46831b089227d8d22cf399cf3434b2d->enter($__internal_c770eaded22a3bcebf410e75067646b8b46831b089227d8d22cf399cf3434b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo " ";
        
        $__internal_c770eaded22a3bcebf410e75067646b8b46831b089227d8d22cf399cf3434b2d->leave($__internal_c770eaded22a3bcebf410e75067646b8b46831b089227d8d22cf399cf3434b2d_prof);

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
        return array (  163 => 31,  151 => 19,  140 => 14,  128 => 5,  119 => 32,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  64 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  32 => 5,  26 => 1,);
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
