<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_3ad48769bb66149d2708f1e3785938f09547d527de669dd4e254a09e7fc834bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e11167679db39106e1715d1067ad7916460021263c69fbeb50c6ae217c6234a = $this->env->getExtension("native_profiler");
        $__internal_8e11167679db39106e1715d1067ad7916460021263c69fbeb50c6ae217c6234a->enter($__internal_8e11167679db39106e1715d1067ad7916460021263c69fbeb50c6ae217c6234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e11167679db39106e1715d1067ad7916460021263c69fbeb50c6ae217c6234a->leave($__internal_8e11167679db39106e1715d1067ad7916460021263c69fbeb50c6ae217c6234a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_deabcb71df7a94f743c11eb46ad290eee7add750b99d0526166214d29b32286a = $this->env->getExtension("native_profiler");
        $__internal_deabcb71df7a94f743c11eb46ad290eee7add750b99d0526166214d29b32286a->enter($__internal_deabcb71df7a94f743c11eb46ad290eee7add750b99d0526166214d29b32286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <svg width=\"13\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 13 28\" enable-background=\"new 0 0 13 28\" xml:space=\"preserve\"><g><rect x=\"3\" y=\"11\" fill=\"#BCBCBB\" width=\"7\" height=\"9\"/></g><g><path fill=\"#3F3F3F\" d=\"M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z\"/></g></svg>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/memory.html.twig", 16)->display(array_merge($context, array("link" => false)));
        
        $__internal_deabcb71df7a94f743c11eb46ad290eee7add750b99d0526166214d29b32286a->leave($__internal_deabcb71df7a94f743c11eb46ad290eee7add750b99d0526166214d29b32286a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  60 => 13,  56 => 11,  53 => 10,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <span>*/
/*             <svg width="13" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 13 28" enable-background="new 0 0 13 28" xml:space="preserve"><g><rect x="3" y="11" fill="#BCBCBB" width="7" height="9"/></g><g><path fill="#3F3F3F" d="M11 6V21H2V6H0V22c0 0.6 0.4 1 1 1h11c0.6 0 1-0.4 1-1V6H11z"/></g></svg>*/
/*             <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>*/
/*         </span>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Memory usage</b>*/
/*             <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} / {{ collector.memoryLimit == -1 ? '&infin;' : '%.1f'|format(collector.memoryLimit / 1024 / 1024)|escape }} MB</span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}*/
/* {% endblock %}*/
/* */
