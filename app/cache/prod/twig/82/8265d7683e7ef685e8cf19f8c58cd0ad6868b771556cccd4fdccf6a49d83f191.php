<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_501695f09207563cd12fafa18a59ca0913431717f87646ab88a0274ed77fe4b9 extends Twig_Template
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
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : null)) {
            // line 5
            echo "        ";
            if ((isset($context["autoload"]) ? $context["autoload"] : null)) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo $this->env->getExtension('ivory_ckeditor')->renderBasePath((isset($context["base_path"]) ? $context["base_path"] : null));
                echo "\";
            </script>
            <script type=\"text/javascript\" src=\"";
                // line 9
                echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["js_path"]) ? $context["js_path"] : null));
                echo "\"></script>
            ";
                // line 10
                if ((isset($context["jquery"]) ? $context["jquery"] : null)) {
                    // line 11
                    echo "                <script type=\"text/javascript\" src=\"";
                    echo $this->env->getExtension('ivory_ckeditor')->renderJsPath((isset($context["jquery_path"]) ? $context["jquery_path"] : null));
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
            if ((isset($context["jquery"]) ? $context["jquery"] : null)) {
                // line 16
                echo "                \$(function () {
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            echo $this->env->getExtension('ivory_ckeditor')->renderDestroy((isset($context["id"]) ? $context["id"] : null));
            echo "

            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : null));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : null));
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
            echo $this->env->getExtension('ivory_ckeditor')->renderWidget((isset($context["id"]) ? $context["id"] : null), (isset($context["config"]) ? $context["config"] : null), array("auto_inline" => (isset($context["auto_inline"]) ? $context["auto_inline"] : null), "inline" => (isset($context["inline"]) ? $context["inline"] : null), "input_sync" => (isset($context["input_sync"]) ? $context["input_sync"] : null)));
            echo "

            ";
            // line 35
            if ((isset($context["jquery"]) ? $context["jquery"] : null)) {
                // line 36
                echo "                });
            ";
            }
            // line 38
            echo "        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  134 => 36,  132 => 35,  127 => 33,  124 => 32,  115 => 30,  111 => 29,  108 => 28,  99 => 26,  95 => 25,  92 => 24,  83 => 22,  79 => 21,  74 => 19,  71 => 18,  67 => 16,  65 => 15,  62 => 14,  59 => 13,  53 => 11,  51 => 10,  47 => 9,  42 => 7,  39 => 6,  36 => 5,  34 => 4,  26 => 2,  20 => 1,);
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
