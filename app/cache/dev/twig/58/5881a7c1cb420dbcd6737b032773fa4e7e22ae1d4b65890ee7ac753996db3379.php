<?php

/* ::sections_app/footer.html.twig */
class __TwigTemplate_8c610b9b072c6ae0ff649ec9f88a0583db4639cd77d6646abc3839ba054335a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9d57c5e9ff4b01fa65163a54703c1ce2a5d63cd94c6946df9e2d428f2bee955 = $this->env->getExtension("native_profiler");
        $__internal_e9d57c5e9ff4b01fa65163a54703c1ce2a5d63cd94c6946df9e2d428f2bee955->enter($__internal_e9d57c5e9ff4b01fa65163a54703c1ce2a5d63cd94c6946df9e2d428f2bee955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sections_app/footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_e9d57c5e9ff4b01fa65163a54703c1ce2a5d63cd94c6946df9e2d428f2bee955->leave($__internal_e9d57c5e9ff4b01fa65163a54703c1ce2a5d63cd94c6946df9e2d428f2bee955_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_1c6c4465e540fba2381dee6e7b83266fcb5e31a4f38c8ef29fa56ace2b3d0dd1 = $this->env->getExtension("native_profiler");
        $__internal_1c6c4465e540fba2381dee6e7b83266fcb5e31a4f38c8ef29fa56ace2b3d0dd1->enter($__internal_1c6c4465e540fba2381dee6e7b83266fcb5e31a4f38c8ef29fa56ace2b3d0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <!-- footer content -->
    <footer style=\"
            bottom: 0px;
            left:  0px;
            right:  0px;
            clear: both;
            display: block;
            position: fixed;
            padding-left: 50px;
            z-index: 2000;\">
        <div class=\"text-left\">
            <p class=\"\"> &nbsp;
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("geradio.png"), "html", null, true);
        echo "\" class=\"img-circle\" />
            </p>
        </div>

    </footer>
    <!-- /footer content -->
";
        
        $__internal_1c6c4465e540fba2381dee6e7b83266fcb5e31a4f38c8ef29fa56ace2b3d0dd1->leave($__internal_1c6c4465e540fba2381dee6e7b83266fcb5e31a4f38c8ef29fa56ace2b3d0dd1_prof);

    }

    public function getTemplateName()
    {
        return "::sections_app/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  35 => 2,  23 => 1,);
    }
}
/* {% block footer %}*/
/*     <!-- footer content -->*/
/*     <footer style="*/
/*             bottom: 0px;*/
/*             left:  0px;*/
/*             right:  0px;*/
/*             clear: both;*/
/*             display: block;*/
/*             position: fixed;*/
/*             padding-left: 50px;*/
/*             z-index: 2000;">*/
/*         <div class="text-left">*/
/*             <p class=""> &nbsp;*/
/*                 <img src="{{asset('geradio.png')}}" class="img-circle" />*/
/*             </p>*/
/*         </div>*/
/* */
/*     </footer>*/
/*     <!-- /footer content -->*/
/* {% endblock footer %}*/
