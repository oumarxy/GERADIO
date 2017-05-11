<?php

/* VentesBundle::sections_ventes/encaissemntSingle_pdf.html.twig */
class __TwigTemplate_61d093252a4514d3341bec9911c81f24305f0b87057cc549f61e6867aecd5556 extends Twig_Template
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
        $__internal_8031e65367453d7270f98635eddc6c9a401659b69feb78d86485a73903670fe2 = $this->env->getExtension("native_profiler");
        $__internal_8031e65367453d7270f98635eddc6c9a401659b69feb78d86485a73903670fe2->enter($__internal_8031e65367453d7270f98635eddc6c9a401659b69feb78d86485a73903670fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle::sections_ventes/encaissemntSingle_pdf.html.twig"));

        // line 1
        echo "\t\t\t\t
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
                font-size:16px;
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
                background:#eee;
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
                                   <h3>RECU DE PAIEMENT DE FACTURE</h3>
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
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "<br />
                                    <strong>Nom :&nbsp; &nbsp;&nbsp;</strong> ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "<br />
                                    <strong>Tel :&nbsp; &nbsp;&nbsp;</strong> ";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "<br />
                                    <strong>Email :</strong> ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "mail", array()), "html", null, true);
        echo "
                                </td>

                                <td>
                                </td>
                            </tr>
\t\t\t\t\t\t\t</tbody>
                        </table>

                    </td>
                </tr>
\t\t\t\t<table>
\t\t\t\t<tr class=\"heading\">
                    <td>Numero</td>
                    <td>Motif</td>
                    <td>Montant</td>
\t\t\t\t\t <td>Reste à payer</td>
                    <td>Date</td>
                </tr>
\t\t\t\t <tr class=\"even pointer\" >
\t\t\t\t   ";
        // line 148
        $context["total_deja_encaisse"] = 0;
        // line 149
        echo "                         <td>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "numero", array()), "html", null, true);
        echo "</td>
                        <td>Versement/Paiement facture</td>\t
\t\t\t\t\t\t <td>";
        // line 151
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montant", array()), 0, ",", " "), "html", null, true);
        echo " F CFA</td>
\t\t\t\t\t\t\t\t\t";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "encaissement", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["encaissement"]) {
            // line 153
            echo "                                            ";
            $context["total_deja_encaisse"] = ((isset($context["total_deja_encaisse"]) ? $context["total_deja_encaisse"] : $this->getContext($context, "total_deja_encaisse")) + $this->getAttribute($context["encaissement"], "montant", array()));
            // line 154
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encaissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                    <td>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "facture", array()), "totalFacture", array()) - (isset($context["total_deja_encaisse"]) ? $context["total_deja_encaisse"] : $this->getContext($context, "total_deja_encaisse"))), 0, ",", " "), "html", null, true);
        echo " F CFA</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 156
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
                
                <tr>
\t\t</table>
                    <td width=\"100%\">
                      
                        <table class=\"table-cno\" style=\"borderd-left:2px solid #ccc\">
                            

                <tr class=\"vide\">
                    <td colspan=\"5\"> &nbsp; </td>
                </tr>
                <tr class=\"total\">
                    <td colspan=\"5\"><strong>Portant sur la somme totale de :</strong>
                        <blockquote><i>
                                <span style=\"text-transform: uppercase;font-size: 16px\">";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["chiffre_en_lettre"]) ? $context["chiffre_en_lettre"] : $this->getContext($context, "chiffre_en_lettre")), "html", null, true);
        echo " Francs CFA</span> 
                            </i></blockquote>
                    </td>
                </tr>
                
            </table>
\t\t\t<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table >
                <tr>
                    <td style=\"text-align: right; font-size: 18px;\">
                <u>L' Agent de caisse</u>
                </td>

                </tr>
            </table>
        </div>
    </body>
</html>
";
        
        $__internal_8031e65367453d7270f98635eddc6c9a401659b69feb78d86485a73903670fe2->leave($__internal_8031e65367453d7270f98635eddc6c9a401659b69feb78d86485a73903670fe2_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle::sections_ventes/encaissemntSingle_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 171,  213 => 156,  208 => 155,  202 => 154,  199 => 153,  195 => 152,  191 => 151,  185 => 149,  183 => 148,  160 => 128,  156 => 127,  152 => 126,  148 => 125,  22 => 1,);
    }
}
/* 				*/
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
/*                 font-size:16px;*/
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
/*                 background:#eee;*/
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
/* */
/*         <div class="invoice-box">*/
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
/*                                    <h3>RECU DE PAIEMENT DE FACTURE</h3>*/
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
/*                                     <strong>Nom :&nbsp; &nbsp;&nbsp;</strong> {{ client.nom }}<br />*/
/*                                     <strong>Tel :&nbsp; &nbsp;&nbsp;</strong> {{ client.telephone }}<br />*/
/*                                     <strong>Email :</strong> {{ client.mail }}*/
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
/* 				<table>*/
/* 				<tr class="heading">*/
/*                     <td>Numero</td>*/
/*                     <td>Motif</td>*/
/*                     <td>Montant</td>*/
/* 					 <td>Reste à payer</td>*/
/*                     <td>Date</td>*/
/*                 </tr>*/
/* 				 <tr class="even pointer" >*/
/* 				   {% set total_deja_encaisse = 0 %}*/
/*                          <td>{{ entity.facture.numero }}</td>*/
/*                         <td>Versement/Paiement facture</td>	*/
/* 						 <td>{{ entity.montant|number_format(0,',',' ') }} F CFA</td>*/
/* 									{% for encaissement in entity.facture.encaissement %}*/
/*                                             {% set total_deja_encaisse = total_deja_encaisse + encaissement.montant  %}*/
/*                                         {% endfor %}*/
/*                                     <td>{{ (entity.facture.totalFacture - total_deja_encaisse)|number_format(0,',',' ') }} F CFA</td>*/
/* 									<td>{{ entity.date|date('d/m/Y H:i:s') }}</td>*/
/*                 */
/*                 <tr>*/
/* 		</table>*/
/*                     <td width="100%">*/
/*                       */
/*                         <table class="table-cno" style="borderd-left:2px solid #ccc">*/
/*                             */
/* */
/*                 <tr class="vide">*/
/*                     <td colspan="5"> &nbsp; </td>*/
/*                 </tr>*/
/*                 <tr class="total">*/
/*                     <td colspan="5"><strong>Portant sur la somme totale de :</strong>*/
/*                         <blockquote><i>*/
/*                                 <span style="text-transform: uppercase;font-size: 16px">{{ chiffre_en_lettre}} Francs CFA</span> */
/*                             </i></blockquote>*/
/*                     </td>*/
/*                 </tr>*/
/*                 */
/*             </table>*/
/* 			<br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <table >*/
/*                 <tr>*/
/*                     <td style="text-align: right; font-size: 18px;">*/
/*                 <u>L' Agent de caisse</u>*/
/*                 </td>*/
/* */
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
