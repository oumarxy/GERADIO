<?php

/* VentesBundle:Operation:journal_caisse.html.twig */
class __TwigTemplate_cc8cf737f243336d79ee5f68b559c7732e99524aa6c995aa84067fd8f8cd3d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Operation:journal_caisse.html.twig", 1);
        $this->blocks = array(
            'container_ventes' => array($this, 'block_container_ventes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VentesBundle::layout_ventes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3113e841987bf855cd108afae311349b1ef33a181edc5e8d628924e8396e02b = $this->env->getExtension("native_profiler");
        $__internal_e3113e841987bf855cd108afae311349b1ef33a181edc5e8d628924e8396e02b->enter($__internal_e3113e841987bf855cd108afae311349b1ef33a181edc5e8d628924e8396e02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Operation:journal_caisse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3113e841987bf855cd108afae311349b1ef33a181edc5e8d628924e8396e02b->leave($__internal_e3113e841987bf855cd108afae311349b1ef33a181edc5e8d628924e8396e02b_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_afb35a11625f6085588a65389abc3768f4a9375734349cba790e8007dc4c00b5 = $this->env->getExtension("native_profiler");
        $__internal_afb35a11625f6085588a65389abc3768f4a9375734349cba790e8007dc4c00b5->enter($__internal_afb35a11625f6085588a65389abc3768f4a9375734349cba790e8007dc4c00b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        // line 4
        echo "     <h2>Jounal périodique</h2>
                   
     <div class=\"row\">

        <div class=\"col-md-6\">
            <div class=\"x_panel tile\">
                <div class=\"x_title\">
                    <h2>Génération rapide du journal</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <h4>
                        Veuillez précisez la période souhaitée en donnant la date début et la date fin.
                    </h4>
                    <p>
                        Pour Générer le journal d'aujourd'hui, indiquez comme date debut la date d'aujourd'hui 
                        et comme date de fin la date d'aujourd'hui également.
                    </p>

                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"x_panel tile\">
                <div class=\"x_title\">
                    <h2>Journal de caisse sur une période</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <form method=\"post\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("operation_journal_print");
        echo "\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th> 
                            <label class=\"control-label required\" for=\"datedebut\">Date Début</label>
                        </th>
                        <td> 
                            <input type=\"text\" id=\"datedebut\" name=\"datedebut\" required=\"required\"
                                    class=\"form-control datetimepicker\" />
                        </td>
                    </tr>

                    <tr>
                        <th>  
                            <label class=\"control-label required\" for=\"datefin\">Date Fin</label>
                        </th>
                        <td>
                            <input type=\"text\" id=\"datefin\" name=\"datefin\" required=\"required\"
                                    class=\"form-control datetimepicker\" />
                        </td>
                    </tr>
                    <tr>
                         <th> 
                         </th>
                        <td>
                            <button type=\"submit\" class=\"btn btn-primary form-control\" ><i class=\"fa fa-file-pdf-o\"></i> Générer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </form>
      
                </div>
            </div>
        </div>
    
        </div>
   
";
        
        $__internal_afb35a11625f6085588a65389abc3768f4a9375734349cba790e8007dc4c00b5->leave($__internal_afb35a11625f6085588a65389abc3768f4a9375734349cba790e8007dc4c00b5_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Operation:journal_caisse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %}*/
/*      <h2>Jounal périodique</h2>*/
/*                    */
/*      <div class="row">*/
/* */
/*         <div class="col-md-6">*/
/*             <div class="x_panel tile">*/
/*                 <div class="x_title">*/
/*                     <h2>Génération rapide du journal</h2>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                     <h4>*/
/*                         Veuillez précisez la période souhaitée en donnant la date début et la date fin.*/
/*                     </h4>*/
/*                     <p>*/
/*                         Pour Générer le journal d'aujourd'hui, indiquez comme date debut la date d'aujourd'hui */
/*                         et comme date de fin la date d'aujourd'hui également.*/
/*                     </p>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="x_panel tile">*/
/*                 <div class="x_title">*/
/*                     <h2>Journal de caisse sur une période</h2>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                     <form method="post" action="{{path('operation_journal_print')}}">*/
/*             <table class="table">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th> */
/*                             <label class="control-label required" for="datedebut">Date Début</label>*/
/*                         </th>*/
/*                         <td> */
/*                             <input type="text" id="datedebut" name="datedebut" required="required"*/
/*                                     class="form-control datetimepicker" />*/
/*                         </td>*/
/*                     </tr>*/
/* */
/*                     <tr>*/
/*                         <th>  */
/*                             <label class="control-label required" for="datefin">Date Fin</label>*/
/*                         </th>*/
/*                         <td>*/
/*                             <input type="text" id="datefin" name="datefin" required="required"*/
/*                                     class="form-control datetimepicker" />*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                          <th> */
/*                          </th>*/
/*                         <td>*/
/*                             <button type="submit" class="btn btn-primary form-control" ><i class="fa fa-file-pdf-o"></i> Générer</button>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*             </form>*/
/*       */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     */
/*         </div>*/
/*    */
/* {% endblock %}*/
/* */
