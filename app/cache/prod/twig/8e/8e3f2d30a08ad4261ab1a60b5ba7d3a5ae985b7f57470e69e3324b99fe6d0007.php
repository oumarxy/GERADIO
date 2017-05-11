<?php

/* ::sections_app/footer.html.twig */
class __TwigTemplate_d1bf81d61c711d3d604b3abdc71ff5dc8453b181b30a08c4ef0b4074bf1fdc74 extends Twig_Template
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
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "::sections_app/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  26 => 2,  20 => 1,);
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
