<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b86f078dd9cd4f6f45fc73b1c0525a082d292c2872bb493d20f7022d6aef6c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de275533d6125dcc2daa8ae727271d23445f0e9397cd52fedc6b2476016cc389 = $this->env->getExtension("native_profiler");
        $__internal_de275533d6125dcc2daa8ae727271d23445f0e9397cd52fedc6b2476016cc389->enter($__internal_de275533d6125dcc2daa8ae727271d23445f0e9397cd52fedc6b2476016cc389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de275533d6125dcc2daa8ae727271d23445f0e9397cd52fedc6b2476016cc389->leave($__internal_de275533d6125dcc2daa8ae727271d23445f0e9397cd52fedc6b2476016cc389_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4243b8b05a1c906d86760e45d609cf824314bbf9a5fd7c4aa17599a9ea145365 = $this->env->getExtension("native_profiler");
        $__internal_4243b8b05a1c906d86760e45d609cf824314bbf9a5fd7c4aa17599a9ea145365->enter($__internal_4243b8b05a1c906d86760e45d609cf824314bbf9a5fd7c4aa17599a9ea145365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4243b8b05a1c906d86760e45d609cf824314bbf9a5fd7c4aa17599a9ea145365->leave($__internal_4243b8b05a1c906d86760e45d609cf824314bbf9a5fd7c4aa17599a9ea145365_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83da104362cd41964d49208bea3ab2ae85a19d1157468e47d3eca90547b4d285 = $this->env->getExtension("native_profiler");
        $__internal_83da104362cd41964d49208bea3ab2ae85a19d1157468e47d3eca90547b4d285->enter($__internal_83da104362cd41964d49208bea3ab2ae85a19d1157468e47d3eca90547b4d285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83da104362cd41964d49208bea3ab2ae85a19d1157468e47d3eca90547b4d285->leave($__internal_83da104362cd41964d49208bea3ab2ae85a19d1157468e47d3eca90547b4d285_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_81142747219bce54d56587a4b7d45b105130a96b14eea638b3f80f58265e9323 = $this->env->getExtension("native_profiler");
        $__internal_81142747219bce54d56587a4b7d45b105130a96b14eea638b3f80f58265e9323->enter($__internal_81142747219bce54d56587a4b7d45b105130a96b14eea638b3f80f58265e9323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_81142747219bce54d56587a4b7d45b105130a96b14eea638b3f80f58265e9323->leave($__internal_81142747219bce54d56587a4b7d45b105130a96b14eea638b3f80f58265e9323_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
