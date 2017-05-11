<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2ce71ee44510efc74c2036f5c582f342dfb08dbc18481a4395f65c70b981b411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83c3e5f57653c4a355a6636a4950bec7215b63326f0e795de33b4f0be5e08648 = $this->env->getExtension("native_profiler");
        $__internal_83c3e5f57653c4a355a6636a4950bec7215b63326f0e795de33b4f0be5e08648->enter($__internal_83c3e5f57653c4a355a6636a4950bec7215b63326f0e795de33b4f0be5e08648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " ~ App </title>
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 79
        echo "</head>
<body>

    ";
        // line 82
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 97
        echo "</body>
";
        
        $__internal_83c3e5f57653c4a355a6636a4950bec7215b63326f0e795de33b4f0be5e08648->leave($__internal_83c3e5f57653c4a355a6636a4950bec7215b63326f0e795de33b4f0be5e08648_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dd79fb3a59b5f41f48e6ea2c99966ac0f467e094a718914c3484fd1b68dde72 = $this->env->getExtension("native_profiler");
        $__internal_5dd79fb3a59b5f41f48e6ea2c99966ac0f467e094a718914c3484fd1b68dde72->enter($__internal_5dd79fb3a59b5f41f48e6ea2c99966ac0f467e094a718914c3484fd1b68dde72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ge Radio ";
        
        $__internal_5dd79fb3a59b5f41f48e6ea2c99966ac0f467e094a718914c3484fd1b68dde72->leave($__internal_5dd79fb3a59b5f41f48e6ea2c99966ac0f467e094a718914c3484fd1b68dde72_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84e5e6ea8fc7988b439e535f60b031724831af273445c30c10876c517ff255a2 = $this->env->getExtension("native_profiler");
        $__internal_84e5e6ea8fc7988b439e535f60b031724831af273445c30c10876c517ff255a2->enter($__internal_84e5e6ea8fc7988b439e535f60b031724831af273445c30c10876c517ff255a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <style>
        @charset \"utf-8\";
        /* CSS Document */

        body {
            font-family: Helvetica;
            margin:0 auto;
            min-height:100%;
            margin-top: -14%;
            background: #E0F7FA;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .nav {

            margin: 0 auto;
            margin-top: 25%;
            margin-left: 35%;
            width: 300px;
            height: 250px;
            background: #fff;
            border-radius: 5px; 
            text-align: center;
            padding-top: 1px;
            box-shadow: 0 0 10px rgba(0,0,0, .5);

        }

        .username, .password {
            border: 1px solid #a6a6a6;
            width: 230px;
            height: 40px;
            border-radius: 3px;
            margin-top: 25px;
            padding-left: 9px;
            color: #6c6c6c;
            background: #fcfcfc;
            outline: none;
        }

        .password:hover, .username:hover {
            box-shadow: 0 0 10px rgba(178,34,34, 1); 
            border: 1px #b22222\t solid ;
        }

        .password:focus, .username:focus, .button:focus, .button:hover:focus{
            box-shadow: 0 0 10px rgba(178,34,34, 1); 
            border: 1px #b22222\t solid ;
        }

        .button {
            color:#fff;
            font-size:20px;
            border: 1px solid #a6a6a6;
            width: 243px;
            height: 48px;
            border-radius: 5px;
            margin-top: 15px;
            margin-right: 6px;
            outline: none;
            background: #009688;
        }
        
    </style>

";
        
        $__internal_84e5e6ea8fc7988b439e535f60b031724831af273445c30c10876c517ff255a2->leave($__internal_84e5e6ea8fc7988b439e535f60b031724831af273445c30c10876c517ff255a2_prof);

    }

    // line 82
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b9e67806c3b6b248ea535990edaf078b68a66057c81bc2155b68c423ffc9969 = $this->env->getExtension("native_profiler");
        $__internal_8b9e67806c3b6b248ea535990edaf078b68a66057c81bc2155b68c423ffc9969->enter($__internal_8b9e67806c3b6b248ea535990edaf078b68a66057c81bc2155b68c423ffc9969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 83
        echo "        <div class=\"nav\">
            <form  action=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 85
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 86
            echo "                    <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 88
        echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <input type=\"text\" class=\"username\"  id=\"username\" name=\"_username\" placeholder=\"Utilisateur\" required=\"required\" />
                <input type=\"password\" class=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" />
                <input type=\"submit\" onclick=\"\" value=\"Se Connecter\" class=\"button\" />

            </form>
        </div>
    ";
        
        $__internal_8b9e67806c3b6b248ea535990edaf078b68a66057c81bc2155b68c423ffc9969->leave($__internal_8b9e67806c3b6b248ea535990edaf078b68a66057c81bc2155b68c423ffc9969_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 88,  162 => 86,  160 => 85,  156 => 84,  153 => 83,  147 => 82,  72 => 10,  66 => 9,  54 => 5,  46 => 97,  44 => 82,  39 => 79,  37 => 9,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Ge Radio {% endblock %} ~ App </title>*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block stylesheets %}*/
/*     <style>*/
/*         @charset "utf-8";*/
/*         /* CSS Document *//* */
/* */
/*         body {*/
/*             font-family: Helvetica;*/
/*             margin:0 auto;*/
/*             min-height:100%;*/
/*             margin-top: -14%;*/
/*             background: #E0F7FA;*/
/*             -webkit-background-size: cover;*/
/*             -moz-background-size: cover;*/
/*             -o-background-size: cover;*/
/*             background-size: cover;*/
/*         }*/
/* */
/*         .nav {*/
/* */
/*             margin: 0 auto;*/
/*             margin-top: 25%;*/
/*             margin-left: 35%;*/
/*             width: 300px;*/
/*             height: 250px;*/
/*             background: #fff;*/
/*             border-radius: 5px; */
/*             text-align: center;*/
/*             padding-top: 1px;*/
/*             box-shadow: 0 0 10px rgba(0,0,0, .5);*/
/* */
/*         }*/
/* */
/*         .username, .password {*/
/*             border: 1px solid #a6a6a6;*/
/*             width: 230px;*/
/*             height: 40px;*/
/*             border-radius: 3px;*/
/*             margin-top: 25px;*/
/*             padding-left: 9px;*/
/*             color: #6c6c6c;*/
/*             background: #fcfcfc;*/
/*             outline: none;*/
/*         }*/
/* */
/*         .password:hover, .username:hover {*/
/*             box-shadow: 0 0 10px rgba(178,34,34, 1); */
/*             border: 1px #b22222	 solid ;*/
/*         }*/
/* */
/*         .password:focus, .username:focus, .button:focus, .button:hover:focus{*/
/*             box-shadow: 0 0 10px rgba(178,34,34, 1); */
/*             border: 1px #b22222	 solid ;*/
/*         }*/
/* */
/*         .button {*/
/*             color:#fff;*/
/*             font-size:20px;*/
/*             border: 1px solid #a6a6a6;*/
/*             width: 243px;*/
/*             height: 48px;*/
/*             border-radius: 5px;*/
/*             margin-top: 15px;*/
/*             margin-right: 6px;*/
/*             outline: none;*/
/*             background: #009688;*/
/*         }*/
/*         */
/*     </style>*/
/* */
/* {% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/*     {% block fos_user_content %}*/
/*         <div class="nav">*/
/*             <form  action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 {% if error %}*/
/*                     <div class="text-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                 <input type="text" class="username"  id="username" name="_username" placeholder="Utilisateur" required="required" />*/
/*                 <input type="password" class="password" id="password" name="_password" required="required" placeholder="Mot de passe" />*/
/*                 <input type="submit" onclick="" value="Se Connecter" class="button" />*/
/* */
/*             </form>*/
/*         </div>*/
/*     {% endblock fos_user_content %}*/
/* </body>*/
/* */
