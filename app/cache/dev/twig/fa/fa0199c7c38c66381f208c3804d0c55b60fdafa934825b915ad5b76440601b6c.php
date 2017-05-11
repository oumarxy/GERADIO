<?php

/* VentesBundle:Facture:new.html.twig */
class __TwigTemplate_a0d50afdaef73a1ea1149004d3db9e20720f9ba0be5c5b6e3e71f1c1458d8aea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Facture:new.html.twig", 1);
        $this->blocks = array(
            'container_ventes' => array($this, 'block_container_ventes'),
            '__internal_6a09eccbb32856e429675d5e8ed40f9a4bd22bfac32aa5b4cc25dfc03b5c40c2' => array($this, 'block___internal_6a09eccbb32856e429675d5e8ed40f9a4bd22bfac32aa5b4cc25dfc03b5c40c2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VentesBundle::layout_ventes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_039b48586e5a1d4fe404fd501c2f00d5904805ae5fc9b6bd58c8a9ec21837c3d = $this->env->getExtension("native_profiler");
        $__internal_039b48586e5a1d4fe404fd501c2f00d5904805ae5fc9b6bd58c8a9ec21837c3d->enter($__internal_039b48586e5a1d4fe404fd501c2f00d5904805ae5fc9b6bd58c8a9ec21837c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Facture:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_039b48586e5a1d4fe404fd501c2f00d5904805ae5fc9b6bd58c8a9ec21837c3d->leave($__internal_039b48586e5a1d4fe404fd501c2f00d5904805ae5fc9b6bd58c8a9ec21837c3d_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_02938415b257ba48506cb51f00ac8d609ca9d6c0c5c69cd176f60b5f92e9f3c5 = $this->env->getExtension("native_profiler");
        $__internal_02938415b257ba48506cb51f00ac8d609ca9d6c0c5c69cd176f60b5f92e9f3c5->enter($__internal_02938415b257ba48506cb51f00ac8d609ca9d6c0c5c69cd176f60b5f92e9f3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        // line 4
        echo "
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat"))), "html", null, true);
        echo " </h1>
    <div class=\"row\">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"col-md-4\">
            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th>Numero</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "numero", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Mail</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "mail", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
            <div class=\"x_panel\">
                <div class=\"x_content\">
                    <div class=\"form-group\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reduction", array()), 'label');
        echo "
                        <div class=\"input-group\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reduction", array()), 'widget');
        echo "
                            <span class=\"input-group-addon\">
                                <label>F CFA</label>
                            </span>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"divider-dashed\"></div>
                    <div class=\"form-group\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'label');
        echo "
                        <div class=\"input-group\">
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remise", array()), 'widget');
        echo "
                            <span class=\"input-group-addon\">
                                <label>%</label>
                            </span>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                    <div class=\"divider-dashed\"></div>
                    <div class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tvafacture", array()), 'label');
        echo "
                        <div class=\"input-group\">
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tvafacture", array()), 'widget');
        echo "
                            <span class=\"input-group-addon\">
                                <label>%</label>
                            </span>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>

                </div>
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"row\">
                <div class=\"col-md-12 \">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>  
                                Produits
                            </h2>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">

                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th width=\"12%\">#Ref</th>
                                        <th width=\"45%\">Libellé</th>
                                        <th width=\"20%\">Prix HT</th>
                                        <th width=\"15%\">Quantité</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody class=\"detailsproduits\" data-prototype=\"
                                       ";
        // line 95
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6a09eccbb32856e429675d5e8ed40f9a4bd22bfac32aa5b4cc25dfc03b5c40c2", $context, $blocks));
        // line 97
        echo "\">


                                </tbody>
                            </table>
                            <h2>  
                                <a class=\"add_prod btn btn-success\">Ajouter un produit</a>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
          
            <div class=\"clearfix\"></div>
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("label" => "Soumettre"));
        echo "

        </div>
        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo " 
        ";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>

";
        
        $__internal_02938415b257ba48506cb51f00ac8d609ca9d6c0c5c69cd176f60b5f92e9f3c5->leave($__internal_02938415b257ba48506cb51f00ac8d609ca9d6c0c5c69cd176f60b5f92e9f3c5_prof);

    }

    // line 95
    public function block___internal_6a09eccbb32856e429675d5e8ed40f9a4bd22bfac32aa5b4cc25dfc03b5c40c2($context, array $blocks = array())
    {
        $__internal_e9265606c0dfff95ed645414000f52d2776e179eb73ff41c67125ddc72065aa9 = $this->env->getExtension("native_profiler");
        $__internal_e9265606c0dfff95ed645414000f52d2776e179eb73ff41c67125ddc72065aa9->enter($__internal_e9265606c0dfff95ed645414000f52d2776e179eb73ff41c67125ddc72065aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6a09eccbb32856e429675d5e8ed40f9a4bd22bfac32aa5b4cc25dfc03b5c40c2"));

        // line 96
        echo "                                           ";
        echo twig_include($this->env, $context, "VentesBundle::sections_ventes/collection_prod.html.twig", array("form_prod" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detailsProduits", array()), "vars", array()), "prototype", array())));
        echo "
                                       ";
        
        $__internal_e9265606c0dfff95ed645414000f52d2776e179eb73ff41c67125ddc72065aa9->leave($__internal_e9265606c0dfff95ed645414000f52d2776e179eb73ff41c67125ddc72065aa9_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Facture:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 96,  213 => 95,  202 => 116,  198 => 115,  192 => 112,  175 => 97,  173 => 95,  136 => 61,  131 => 59,  119 => 50,  114 => 48,  102 => 39,  97 => 37,  87 => 30,  80 => 26,  73 => 22,  66 => 18,  59 => 14,  49 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/* {% block container_ventes %}*/
/* */
/*     <h1>{{etat|capitalize}} </h1>*/
/*     <div class="row">*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="col-md-4">*/
/*             <table class="table table-bordered">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th>Numero</th>*/
/*                         <td>{{ client.numero }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Nom</th>*/
/*                         <td>{{ client.nom }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Adresse</th>*/
/*                         <td>{{ client.adresse }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Telephone</th>*/
/*                         <td>{{ client.telephone }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Mail</th>*/
/*                         <td>{{ client.mail }}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*             <div class="x_panel">*/
/*                 <div class="x_content">*/
/*                     <div class="form-group">*/
/*                         {{form_label(form.reduction)}}*/
/*                         <div class="input-group">*/
/*                             {{form_widget(form.reduction)}}*/
/*                             <span class="input-group-addon">*/
/*                                 <label>F CFA</label>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <div class="divider-dashed"></div>*/
/*                     <div class="form-group">*/
/*                         {{form_label(form.remise)}}*/
/*                         <div class="input-group">*/
/*                             {{form_widget(form.remise)}}*/
/*                             <span class="input-group-addon">*/
/*                                 <label>%</label>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <div class="divider-dashed"></div>*/
/*                     <div class="form-group">*/
/*                         {{form_label(form.tvafacture)}}*/
/*                         <div class="input-group">*/
/*                             {{form_widget(form.tvafacture)}}*/
/*                             <span class="input-group-addon">*/
/*                                 <label>%</label>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-8">*/
/*             <div class="row">*/
/*                 <div class="col-md-12 ">*/
/*                     <div class="x_panel">*/
/*                         <div class="x_title">*/
/*                             <h2>  */
/*                                 Produits*/
/*                             </h2>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                         <div class="x_content">*/
/* */
/*                             <table class="table table-bordered">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th width="12%">#Ref</th>*/
/*                                         <th width="45%">Libellé</th>*/
/*                                         <th width="20%">Prix HT</th>*/
/*                                         <th width="15%">Quantité</th>*/
/*                                         <th >Action</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody class="detailsproduits" data-prototype="*/
/*                                        {% filter escape %}*/
/*                                            {{ include('VentesBundle::sections_ventes/collection_prod.html.twig', { 'form_prod': form.detailsProduits.vars.prototype }) }}*/
/*                                        {% endfilter %}">*/
/* */
/* */
/*                                 </tbody>*/
/*                             </table>*/
/*                             <h2>  */
/*                                 <a class="add_prod btn btn-success">Ajouter un produit</a>*/
/*                             </h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*           */
/*             <div class="clearfix"></div>*/
/*             {{form_row(form.submit, { 'label': 'Soumettre' })}}*/
/* */
/*         </div>*/
/*         {{ form_widget(form._token) }} */
/*         {{ form_end(form, {'render_rest': false}) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
