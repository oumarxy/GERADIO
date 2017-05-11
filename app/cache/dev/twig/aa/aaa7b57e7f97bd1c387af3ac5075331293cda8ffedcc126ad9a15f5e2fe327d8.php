<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_a2dd8d3700a634bbf5f18e34f96cedbcd9826b8997fdb55251a5bc98470b4207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3a361ee11d14917dbb481dd8fe842d333bdd14be51bc2f01c78f32e60d37996 = $this->env->getExtension("native_profiler");
        $__internal_f3a361ee11d14917dbb481dd8fe842d333bdd14be51bc2f01c78f32e60d37996->enter($__internal_f3a361ee11d14917dbb481dd8fe842d333bdd14be51bc2f01c78f32e60d37996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        
        $__internal_f3a361ee11d14917dbb481dd8fe842d333bdd14be51bc2f01c78f32e60d37996->leave($__internal_f3a361ee11d14917dbb481dd8fe842d333bdd14be51bc2f01c78f32e60d37996_prof);

    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_e1a1582af65a1b704c13913fb1ca52575bccd4445d8d793c487561b627ada266 = $this->env->getExtension("native_profiler");
        $__internal_e1a1582af65a1b704c13913fb1ca52575bccd4445d8d793c487561b627ada266->enter($__internal_e1a1582af65a1b704c13913fb1ca52575bccd4445d8d793c487561b627ada266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) {
            // line 5
            echo "        ";
            if ((isset($context["autoload"]) ? $context["autoload"] : $this->getContext($context, "autoload"))) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->env->getExtension('ivory_ckeditor')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")));
                echo "\"></script>
            ";
                // line 10
                if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                    // line 11
                    echo "                <script type=\"text/javascript\" src=\"";
                    echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : $this->getContext($context, "jquery_path")));
                    echo "\"></script>
            ";
                }
                // line 13
                echo "        ";
            }
            // line 14
            echo "        <script type=\"text/javascript\">
            ";
            // line 15
            if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                // line 16
                echo "                \$(function () {
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            echo $this->env->getExtension('ivory_ckeditor')->renderDestroy((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            echo "

            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 22
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderPlugin($context["plugin_name"], $context["plugin"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 26
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderStylesSet($context["style_name"], $context["style"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 30
                echo "                ";
                echo $this->env->getExtension('ivory_ckeditor')->renderTemplate($context["template_name"], $context["template"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
            ";
            // line 33
            echo $this->env->getExtension('ivory_ckeditor')->renderWidget((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), array("auto_inline" => (isset($context["auto_inline"]) ? $context["auto_inline"] : $this->getContext($context, "auto_inline")), "inline" => (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "input_sync" => (isset($context["input_sync"]) ? $context["input_sync"] : $this->getContext($context, "input_sync"))));
            echo "

            ";
            // line 35
            if ((isset($context["jquery"]) ? $context["jquery"] : $this->getContext($context, "jquery"))) {
                // line 36
                echo "                });
            ";
            }
            // line 38
            echo "        </script>
    ";
        }
        
        $__internal_e1a1582af65a1b704c13913fb1ca52575bccd4445d8d793c487561b627ada266->leave($__internal_e1a1582af65a1b704c13913fb1ca52575bccd4445d8d793c487561b627ada266_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 38,  143 => 36,  141 => 35,  136 => 33,  133 => 32,  124 => 30,  120 => 29,  117 => 28,  108 => 26,  104 => 25,  101 => 24,  92 => 22,  88 => 21,  83 => 19,  80 => 18,  76 => 16,  74 => 15,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  56 => 9,  51 => 7,  48 => 6,  45 => 5,  43 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block ckeditor_widget %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* */
/*     {% if enable %}*/
/*         {% if autoload %}*/
/*             <script type="text/javascript">*/
/*                 var CKEDITOR_BASEPATH = "{{ ckeditor_base_path(base_path) }}";*/
/*             </script>*/
/*             <script type="text/javascript" src="{{ ckeditor_js_path(js_path) }}"></script>*/
/*             {% if jquery %}*/
/*                 <script type="text/javascript" src="{{ ckeditor_js_path(jquery_path) }}"></script>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             {% if jquery %}*/
/*                 $(function () {*/
/*             {% endif %}*/
/* */
/*             {{ ckeditor_destroy(id) }}*/
/* */
/*             {% for plugin_name, plugin in plugins %}*/
/*                 {{ ckeditor_plugin(plugin_name, plugin) }}*/
/*             {% endfor %}*/
/* */
/*             {% for style_name, style in styles %}*/
/*                 {{ ckeditor_styles_set(style_name, style) }}*/
/*             {% endfor %}*/
/* */
/*             {% for template_name, template in templates %}*/
/*                 {{ ckeditor_template(template_name, template) }}*/
/*             {% endfor %}*/
/* */
/*             {{ ckeditor_widget(id, config, {auto_inline: auto_inline, inline: inline, input_sync: input_sync}) }}*/
/* */
/*             {% if jquery %}*/
/*                 });*/
/*             {% endif %}*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
