<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1cfe4b90c7361674aea77dede6e1f92e946ed29ec9870ea415fdf778e86fcdf5 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ge Radio ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 82
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 83
        echo "        <div class=\"nav\">
            <form  action=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 85
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 86
            echo "                    <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 88
        echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                <input type=\"text\" class=\"username\"  id=\"username\" name=\"_username\" placeholder=\"Utilisateur\" required=\"required\" />
                <input type=\"password\" class=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" />
                <input type=\"submit\" onclick=\"\" value=\"Se Connecter\" class=\"button\" />

            </form>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 88,  141 => 86,  139 => 85,  135 => 84,  132 => 83,  129 => 82,  57 => 10,  54 => 9,  48 => 5,  43 => 97,  41 => 82,  36 => 79,  34 => 9,  28 => 5,  22 => 1,);
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
