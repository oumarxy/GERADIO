<?php

/* VentesBundle::sections_ventes/Operation_pdf.html.twig */
class __TwigTemplate_d63140c12779477febf46a95e4a5d2849c6c5cff619c09163c95a0236830b6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37b4849fde43d1a488c6dc2c425475ebcc09a3e617c1c3504003760f1ad4725c = $this->env->getExtension("native_profiler");
        $__internal_37b4849fde43d1a488c6dc2c425475ebcc09a3e617c1c3504003760f1ad4725c->enter($__internal_37b4849fde43d1a488c6dc2c425475ebcc09a3e617c1c3504003760f1ad4725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle::sections_ventes/Operation_pdf.html.twig"));

        // line 1
        echo "
<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title></title>
        <style>

            body {
                height: 297mm;/*297*/
                width: 210mm;
            }
            .invoice-box{
                max-width:800px;
                margin-left: 50px;
                padding:30px;
                font-size:20px;
                line-height:24px;
                font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color:#555;
                height: 842px;
            }

            .invoice-box table{
                width:100%;
                line-height:inherit;
                text-align:left;
            }
            td{
                font-size: 18px !important;
            }

            .invoice-box table td{
                padding:5px;
                vertical-align:top;
            }

            .invoice-box table tr td:nth-child(2){
                text-align:left;
            }

            .invoice-box table tr.top table td{
                padding-bottom:20px;
            }

            .invoice-box table tr.top table td.title{
                font-size:45px;
                line-height:45px;
                color:#333;
            }

            .invoice-box table tr.information table td{
                padding-bottom:40px;
            }

            .invoice-box table tr.heading td{
                background:#ccc;
                border-bottom:1px solid #ddd;
                font-weight:bold;
            }

            .invoice-box table tr.details td{
                padding-bottom:20px;
            }

            .invoice-box table tr.item td{
                border-bottom:1px solid #eee;
            }

            .invoice-box table tr.item.last td{
                border-bottom:none;
            }

            .invoice-box table tr.total td:nth-child(2){
                border-top:2px solid #eee;
                font-weight:bold;
            }
            tr{
                border-bottom: 2px solid #eee !important;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td{
                    width:100%;
                    display:block;
                    text-align:center;
                }

                .invoice-box table tr.information table td{
                    width:100%;
                    display:block;
                    text-align:center;
                }
            }
        </style>
    </head>

    <body>
         <div class=\"invoice-box\">
            <table cellpadding=\"0\" cellspacing=\"0\" class=\"table table-striped\">
                <tr class=\"top\">
                    <td colspan=\"5\">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                     
                        <table>
                            <tr>
                                <td style=\"text-align: center;\">
                                   <h3 style=\"text-transform: uppercase;\">BON ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "flux", array()), "html", null, true);
        echo " DE CAISSE</h3>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
\t\t\t\t
\t\t\t\t

                <tr class=\"information\">
                    <td >
                        <table class=\"table table-striped table-hover table-bordered\">
\t\t\t\t\t\t<tbody>
                            <tr>
                                <td style=\"text-align: left\">
                                      <strong> Date: &nbsp; &nbsp;&nbsp; </strong> ";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "<br />
                                    <strong>Nom :&nbsp; &nbsp;&nbsp;</strong> ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "<br />
                                    <strong>Fonction :&nbsp; &nbsp;&nbsp;</strong> ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fonctionpersonres", array()), "html", null, true);
        echo "<br />
                                    <strong>Tel :</strong> ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephone", array()), "html", null, true);
        echo "
                                </td>

                                <td>
                                </td>
                            </tr>
\t\t\t\t\t\t\t</tbody>
                        </table>

                    </td>
                </tr>
               <table>
\t\t\t\t<tr class=\"heading\">
\t\t\t\t<td>Numero</td>
                    <td>Type operation</td>
                    <td>Motif</td>
                    <td>Montant</td>
                </tr>
\t\t\t\t <tr class=\"even pointer\" >
\t\t\t\t        <td>";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                         <td>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "flux", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 151
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle", array())), "html", null, true);
        echo "</td>\t
\t\t\t\t\t\t <td>";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montant", array()), "html", null, true);
        echo " F CFA</td>
\t\t\t
                <tr>
\t\t</table>
                  <br>
                   <br>
                   <br>
                

                ";
        // line 161
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montant", array()) > 0)) {
            // line 162
            echo "                <tr class=\"total\">
                    <td colspan=\"5\"><strong>Portant sur la somme totale de :</strong>
                        <blockquote><i>
                                <span style=\"text-transform: uppercase;font-size: 16px\">";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["chiffre_en_lettre"]) ? $context["chiffre_en_lettre"] : $this->getContext($context, "chiffre_en_lettre")), "html", null, true);
            echo " Francs CFA</span> 
                            </i></blockquote>
                    </td>
                </tr>
                <tr>
\t\t\t\t <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    <td colspan=\"3\" style=\"font-size: 10px\"><u><strong>LA COMPTABILITE</strong></u></td>
                </tr>
                ";
        }
        // line 178
        echo "            </table>
        </div>
    </body>
</html>
";
        
        $__internal_37b4849fde43d1a488c6dc2c425475ebcc09a3e617c1c3504003760f1ad4725c->leave($__internal_37b4849fde43d1a488c6dc2c425475ebcc09a3e617c1c3504003760f1ad4725c_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle::sections_ventes/Operation_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 178,  218 => 165,  213 => 162,  211 => 161,  199 => 152,  195 => 151,  191 => 150,  187 => 149,  165 => 130,  161 => 129,  157 => 128,  153 => 127,  135 => 112,  22 => 1,);
    }
}
/* */
/* <!doctype html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title></title>*/
/*         <style>*/
/* */
/*             body {*/
/*                 height: 297mm;/*297*//* */
/*                 width: 210mm;*/
/*             }*/
/*             .invoice-box{*/
/*                 max-width:800px;*/
/*                 margin-left: 50px;*/
/*                 padding:30px;*/
/*                 font-size:20px;*/
/*                 line-height:24px;*/
/*                 font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;*/
/*                 color:#555;*/
/*                 height: 842px;*/
/*             }*/
/* */
/*             .invoice-box table{*/
/*                 width:100%;*/
/*                 line-height:inherit;*/
/*                 text-align:left;*/
/*             }*/
/*             td{*/
/*                 font-size: 18px !important;*/
/*             }*/
/* */
/*             .invoice-box table td{*/
/*                 padding:5px;*/
/*                 vertical-align:top;*/
/*             }*/
/* */
/*             .invoice-box table tr td:nth-child(2){*/
/*                 text-align:left;*/
/*             }*/
/* */
/*             .invoice-box table tr.top table td{*/
/*                 padding-bottom:20px;*/
/*             }*/
/* */
/*             .invoice-box table tr.top table td.title{*/
/*                 font-size:45px;*/
/*                 line-height:45px;*/
/*                 color:#333;*/
/*             }*/
/* */
/*             .invoice-box table tr.information table td{*/
/*                 padding-bottom:40px;*/
/*             }*/
/* */
/*             .invoice-box table tr.heading td{*/
/*                 background:#ccc;*/
/*                 border-bottom:1px solid #ddd;*/
/*                 font-weight:bold;*/
/*             }*/
/* */
/*             .invoice-box table tr.details td{*/
/*                 padding-bottom:20px;*/
/*             }*/
/* */
/*             .invoice-box table tr.item td{*/
/*                 border-bottom:1px solid #eee;*/
/*             }*/
/* */
/*             .invoice-box table tr.item.last td{*/
/*                 border-bottom:none;*/
/*             }*/
/* */
/*             .invoice-box table tr.total td:nth-child(2){*/
/*                 border-top:2px solid #eee;*/
/*                 font-weight:bold;*/
/*             }*/
/*             tr{*/
/*                 border-bottom: 2px solid #eee !important;*/
/*             }*/
/* */
/*             @media only screen and (max-width: 600px) {*/
/*                 .invoice-box table tr.top table td{*/
/*                     width:100%;*/
/*                     display:block;*/
/*                     text-align:center;*/
/*                 }*/
/* */
/*                 .invoice-box table tr.information table td{*/
/*                     width:100%;*/
/*                     display:block;*/
/*                     text-align:center;*/
/*                 }*/
/*             }*/
/*         </style>*/
/*     </head>*/
/* */
/*     <body>*/
/*          <div class="invoice-box">*/
/*             <table cellpadding="0" cellspacing="0" class="table table-striped">*/
/*                 <tr class="top">*/
/*                     <td colspan="5">*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                      */
/*                         <table>*/
/*                             <tr>*/
/*                                 <td style="text-align: center;">*/
/*                                    <h3 style="text-transform: uppercase;">BON {{ entity.flux }} DE CAISSE</h3>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </td>*/
/*                 </tr>*/
/* 				*/
/* 				*/
/* */
/*                 <tr class="information">*/
/*                     <td >*/
/*                         <table class="table table-striped table-hover table-bordered">*/
/* 						<tbody>*/
/*                             <tr>*/
/*                                 <td style="text-align: left">*/
/*                                       <strong> Date: &nbsp; &nbsp;&nbsp; </strong> {{'now'|date('d/m/Y') }}<br />*/
/*                                     <strong>Nom :&nbsp; &nbsp;&nbsp;</strong> {{ entity.nom }}<br />*/
/*                                     <strong>Fonction :&nbsp; &nbsp;&nbsp;</strong> {{ entity.fonctionpersonres }}<br />*/
/*                                     <strong>Tel :</strong> {{ entity.telephone }}*/
/*                                 </td>*/
/* */
/*                                 <td>*/
/*                                 </td>*/
/*                             </tr>*/
/* 							</tbody>*/
/*                         </table>*/
/* */
/*                     </td>*/
/*                 </tr>*/
/*                <table>*/
/* 				<tr class="heading">*/
/* 				<td>Numero</td>*/
/*                     <td>Type operation</td>*/
/*                     <td>Motif</td>*/
/*                     <td>Montant</td>*/
/*                 </tr>*/
/* 				 <tr class="even pointer" >*/
/* 				        <td>{{ entity.id }}</td>*/
/*                          <td>{{ entity.flux }}</td>*/
/*                         <td>{{ entity.libelle|capitalize }}</td>	*/
/* 						 <td>{{ entity.montant }} F CFA</td>*/
/* 			*/
/*                 <tr>*/
/* 		</table>*/
/*                   <br>*/
/*                    <br>*/
/*                    <br>*/
/*                 */
/* */
/*                 {% if entity.montant > 0 %}*/
/*                 <tr class="total">*/
/*                     <td colspan="5"><strong>Portant sur la somme totale de :</strong>*/
/*                         <blockquote><i>*/
/*                                 <span style="text-transform: uppercase;font-size: 16px">{{ chiffre_en_lettre}} Francs CFA</span> */
/*                             </i></blockquote>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/* 				 <br>*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                         <br>*/
/*                     <td colspan="3" style="font-size: 10px"><u><strong>LA COMPTABILITE</strong></u></td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*             </table>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
