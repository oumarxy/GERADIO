<?php

/* VentesBundle:Home:home.html.twig */
class __TwigTemplate_8a41edf784551d4fb4bb2dcd37464cc7277354a7a2aed4ca9728d1c4429933f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("VentesBundle::layout_ventes.html.twig", "VentesBundle:Home:home.html.twig", 1);
        $this->blocks = array(
            'container_ventes' => array($this, 'block_container_ventes'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VentesBundle::layout_ventes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19d7d62c35166f37c977f6aef5e9575e4448f4bd94bead03c0ce2c405716776f = $this->env->getExtension("native_profiler");
        $__internal_19d7d62c35166f37c977f6aef5e9575e4448f4bd94bead03c0ce2c405716776f->enter($__internal_19d7d62c35166f37c977f6aef5e9575e4448f4bd94bead03c0ce2c405716776f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d7d62c35166f37c977f6aef5e9575e4448f4bd94bead03c0ce2c405716776f->leave($__internal_19d7d62c35166f37c977f6aef5e9575e4448f4bd94bead03c0ce2c405716776f_prof);

    }

    // line 3
    public function block_container_ventes($context, array $blocks = array())
    {
        $__internal_977f8d9f55ad3b97784f942aad835b62c7ff825361a2ed1c01ba079c506ec412 = $this->env->getExtension("native_profiler");
        $__internal_977f8d9f55ad3b97784f942aad835b62c7ff825361a2ed1c01ba079c506ec412->enter($__internal_977f8d9f55ad3b97784f942aad835b62c7ff825361a2ed1c01ba079c506ec412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_ventes"));

        // line 4
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/jQuery1.7.1.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/highcharts.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/exporting.js"), "html", null, true);
        echo "\"></script>
     <!-- page content -->
     <div role=\"main\">

         <div class=\"\">

             <div class=\"row top_tiles\">
                 <div class=\"animated .fadeIn col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                     <div class=\"tile-stats\">
                         <div class=\"icon\"><i class=\"fa fa-signal\"></i>
                         </div>
                         <div class=\"count\" style=\"font-size: 30px !important;\"><span class=\"timer\" data-from=\"0\" data-to=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["chiffreAffaireAujourdhui"]) ? $context["chiffreAffaireAujourdhui"] : $this->getContext($context, "chiffreAffaireAujourdhui")), "html", null, true);
        echo "\"></span></div>

                         <h3>C.A.</h3>
                         <p>Aujourd'hui</p>
                     </div>
                 </div>
                 <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                     <div class=\"tile-stats\">
                         <div class=\"icon\"><i class=\"fa fa-line-chart\"></i>
                         </div>
                         <div class=\"count\" style=\"font-size: 30px !important;\"><span class=\"timer\" data-from=\"0\" data-to=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["chiffreAffaireAnnee"]) ? $context["chiffreAffaireAnnee"] : $this->getContext($context, "chiffreAffaireAnnee")), "html", null, true);
        echo "\"></span></div>

                         <h3>C.A.</h3>
                         <p>Cette année</p>
                     </div>
                 </div>
                 <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                     <div class=\"tile-stats\">
                         <div class=\"icon\"><i class=\"fa fa-compass\"></i>
                         </div>
                         <div class=\"count\" style=\"font-size: 30px !important;\"><span class=\"timer\" data-from=\"0\" data-to=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["totalVenduDuJour"]) ? $context["totalVenduDuJour"] : $this->getContext($context, "totalVenduDuJour")), "html", null, true);
        echo "\"></span></div>

                         <h3>Services</h3>
                         <p>Total des services rendus aujourd'hui.</p>
                     </div>
                 </div>
                 <div class=\"animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                     <div class=\"tile-stats\">
                         <div class=\"icon\"><i class=\"fa fa-sort-amount-desc\"></i>
                         </div>
                         <div class=\"count\" style=\"font-size: 30px !important;\"><span class=\"timer\" data-from=\"0\" data-to=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["totalFactureImpayee"]) ? $context["totalFactureImpayee"] : $this->getContext($context, "totalFactureImpayee")), "html", null, true);
        echo "\"></span></div>

                         <h3>Factures </h3>
                         <p>Les impayées ou en cours de paiement.</p>
                     </div>
                 </div>

             </div>

             <div class=\"row\">
                 <script type=\"text/javascript\">
                     ";
        // line 58
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
                 </script>
                 <div id=\"idlinechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
                 <div class=\"row\">&nbsp;</div>
             </div>

             <div class=\"row\">

                 <div class=\"col-md-6\">
                     <script type=\"text/javascript\">
                         ";
        // line 68
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["banqueCaisse"]) ? $context["banqueCaisse"] : $this->getContext($context, "banqueCaisse")));
        echo "
                     </script>
                     <div id=\"banqueCaissePie\"></div>
                 </div>

                 <div class=\"col-md-6\">
                     <script type=\"text/javascript\">
                         ";
        // line 75
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["creditComptant"]) ? $context["creditComptant"] : $this->getContext($context, "creditComptant")));
        echo "
                     </script>
                     <div id=\"creditComptantPie\"></div>
                 </div>


                 <div class=\"row\">&nbsp;</div>
             </div>
                      <div class=\"row\">&nbsp;</div>
                      <div class=\"clearfix\"></div>
                     <div class=\"row\">
                           <div class=\"col-md-12\">
                     <script type=\"text/javascript\">
                         ";
        // line 88
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["categorieProduit"]) ? $context["categorieProduit"] : $this->getContext($context, "categorieProduit")));
        echo "
                     </script>
                     <div id=\"categorieProduitPie\"></div>
                 </div>
                     </div>
         </div>
     </div>
     <!-- /page content -->
     ";
        // line 96
        $this->displayBlock('javascript', $context, $blocks);
        // line 114
        echo "
 ";
        
        $__internal_977f8d9f55ad3b97784f942aad835b62c7ff825361a2ed1c01ba079c506ec412->leave($__internal_977f8d9f55ad3b97784f942aad835b62c7ff825361a2ed1c01ba079c506ec412_prof);

    }

    // line 96
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_23f45f5d4ca6621dbcdc55b6182a9e0e0a361f693fb09fd7cdc2be2af53e8ff5 = $this->env->getExtension("native_profiler");
        $__internal_23f45f5d4ca6621dbcdc55b6182a9e0e0a361f693fb09fd7cdc2be2af53e8ff5->enter($__internal_23f45f5d4ca6621dbcdc55b6182a9e0e0a361f693fb09fd7cdc2be2af53e8ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 97
        echo "         <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("design/dist/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\">
             \$('.timer').countTo({
                 speed: 2000,
                 refreshInterval: 25,
                 formatter: function (value, options) {
                     return value.toFixed(options.decimals).replace(/\\B(?=(?:\\d{3})+(?!\\d))/g, ' ');
                 },
                 onUpdate: function (value) {
                     console.debug(this);
                 },
                 onComplete: function (value) {
                     console.debug(this);
                 }
             });
         </script>
     ";
        
        $__internal_23f45f5d4ca6621dbcdc55b6182a9e0e0a361f693fb09fd7cdc2be2af53e8ff5->leave($__internal_23f45f5d4ca6621dbcdc55b6182a9e0e0a361f693fb09fd7cdc2be2af53e8ff5_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 97,  177 => 96,  169 => 114,  167 => 96,  156 => 88,  140 => 75,  130 => 68,  117 => 58,  103 => 47,  90 => 37,  77 => 27,  64 => 17,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "VentesBundle::layout_ventes.html.twig" %}*/
/* */
/*  {% block container_ventes %}*/
/*      <script src="{{ asset('design/dist/js/jQuery1.7.1.min.js') }}"></script>*/
/*      <script src="{{ asset('design/dist/js/highcharts.js') }}"></script>*/
/*      <script src="{{ asset('design/dist/js/exporting.js') }}"></script>*/
/*      <!-- page content -->*/
/*      <div role="main">*/
/* */
/*          <div class="">*/
/* */
/*              <div class="row top_tiles">*/
/*                  <div class="animated .fadeIn col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                      <div class="tile-stats">*/
/*                          <div class="icon"><i class="fa fa-signal"></i>*/
/*                          </div>*/
/*                          <div class="count" style="font-size: 30px !important;"><span class="timer" data-from="0" data-to="{{ chiffreAffaireAujourdhui }}"></span></div>*/
/* */
/*                          <h3>C.A.</h3>*/
/*                          <p>Aujourd'hui</p>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                      <div class="tile-stats">*/
/*                          <div class="icon"><i class="fa fa-line-chart"></i>*/
/*                          </div>*/
/*                          <div class="count" style="font-size: 30px !important;"><span class="timer" data-from="0" data-to="{{ chiffreAffaireAnnee }}"></span></div>*/
/* */
/*                          <h3>C.A.</h3>*/
/*                          <p>Cette année</p>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                      <div class="tile-stats">*/
/*                          <div class="icon"><i class="fa fa-compass"></i>*/
/*                          </div>*/
/*                          <div class="count" style="font-size: 30px !important;"><span class="timer" data-from="0" data-to="{{ totalVenduDuJour }}"></span></div>*/
/* */
/*                          <h3>Services</h3>*/
/*                          <p>Total des services rendus aujourd'hui.</p>*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                      <div class="tile-stats">*/
/*                          <div class="icon"><i class="fa fa-sort-amount-desc"></i>*/
/*                          </div>*/
/*                          <div class="count" style="font-size: 30px !important;"><span class="timer" data-from="0" data-to="{{ totalFactureImpayee }}"></span></div>*/
/* */
/*                          <h3>Factures </h3>*/
/*                          <p>Les impayées ou en cours de paiement.</p>*/
/*                      </div>*/
/*                  </div>*/
/* */
/*              </div>*/
/* */
/*              <div class="row">*/
/*                  <script type="text/javascript">*/
/*                      {{ chart(chart) }}*/
/*                  </script>*/
/*                  <div id="idlinechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/*                  <div class="row">&nbsp;</div>*/
/*              </div>*/
/* */
/*              <div class="row">*/
/* */
/*                  <div class="col-md-6">*/
/*                      <script type="text/javascript">*/
/*                          {{ chart(banqueCaisse) }}*/
/*                      </script>*/
/*                      <div id="banqueCaissePie"></div>*/
/*                  </div>*/
/* */
/*                  <div class="col-md-6">*/
/*                      <script type="text/javascript">*/
/*                          {{ chart(creditComptant) }}*/
/*                      </script>*/
/*                      <div id="creditComptantPie"></div>*/
/*                  </div>*/
/* */
/* */
/*                  <div class="row">&nbsp;</div>*/
/*              </div>*/
/*                       <div class="row">&nbsp;</div>*/
/*                       <div class="clearfix"></div>*/
/*                      <div class="row">*/
/*                            <div class="col-md-12">*/
/*                      <script type="text/javascript">*/
/*                          {{ chart(categorieProduit) }}*/
/*                      </script>*/
/*                      <div id="categorieProduitPie"></div>*/
/*                  </div>*/
/*                      </div>*/
/*          </div>*/
/*      </div>*/
/*      <!-- /page content -->*/
/*      {% block javascript %}*/
/*          <script src="{{ asset('design/dist/js/jquery.countTo.js') }}"></script>*/
/*          <script type="text/javascript">*/
/*              $('.timer').countTo({*/
/*                  speed: 2000,*/
/*                  refreshInterval: 25,*/
/*                  formatter: function (value, options) {*/
/*                      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ' ');*/
/*                  },*/
/*                  onUpdate: function (value) {*/
/*                      console.debug(this);*/
/*                  },*/
/*                  onComplete: function (value) {*/
/*                      console.debug(this);*/
/*                  }*/
/*              });*/
/*          </script>*/
/*      {% endblock %}*/
/* */
/*  {% endblock %}*/
/* */
