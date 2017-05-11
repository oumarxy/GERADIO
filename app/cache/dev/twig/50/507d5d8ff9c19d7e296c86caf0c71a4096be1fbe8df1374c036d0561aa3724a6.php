<?php

/* VentesBundle::sections_ventes/journal_pdf.html.twig */
class __TwigTemplate_8fab68ba03cd0b8f0e24afa85280ca27ae2014d301dba97925f22842b4f28111 extends Twig_Template
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
        $__internal_f2221a231414f6f22e6cede506ff418e4aa1d6afed76ad71daa5b70fa42db3f0 = $this->env->getExtension("native_profiler");
        $__internal_f2221a231414f6f22e6cede506ff418e4aa1d6afed76ad71daa5b70fa42db3f0->enter($__internal_f2221a231414f6f22e6cede506ff418e4aa1d6afed76ad71daa5b70fa42db3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VentesBundle::sections_ventes/journal_pdf.html.twig"));

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
            td{
                font-size: 13px !important;
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
            <table cellpadding=\"0\" cellspacing=\"0\">
                <tr class=\"top\">
                    <td colspan=\"5\">
                        <table>
                            <tr>
                                <td class=\"title\">
                                    ";
        // line 107
        echo "                                </td>

                                <td style=\"text-align: right\">
                                    Abidjan, le";
        // line 110
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td colspan=\"5\" style=\"text-transform: capitalize\" align=\"left\"><strong>Objet : &nbsp;</strong>Journal de caisse</td>
                </tr>
                <tr>
                    <td colspan=\"5\" style=\"text-transform: capitalize\" align=\"left\"><strong>Période : &nbsp;</strong> du ";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datedebut"]) ? $context["datedebut"] : $this->getContext($context, "datedebut")), "d/m/Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datefin"]) ? $context["datefin"] : $this->getContext($context, "datefin")), "d/m/Y"), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 123
        $context["total_caisse"] = 0;
        // line 124
        echo "                ";
        if ((twig_length_filter($this->env, (isset($context["encaissements"]) ? $context["encaissements"] : $this->getContext($context, "encaissements"))) > 0)) {
            // line 125
            echo "                    <tr class=\"heading\">
                        <td width=\"10%\">Numero.</td>
                        <td width=\"40%\">Date</td>
                        <td>Montant</td>
                        <td align=\"right\" width=\"20%\">Montant Payé</td>
                        <td align=\"right\" width=\"20%\">Etat</td>
                    </tr>

                    ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["encaissements"]) ? $context["encaissements"] : $this->getContext($context, "encaissements")));
            foreach ($context['_seq'] as $context["_key"] => $context["encaissement"]) {
                // line 134
                echo "                        <tr class=\"item\">
                            <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["encaissement"], "facture", array()), "numero", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 136
                if ($this->getAttribute($context["encaissement"], "dateFormat", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["encaissement"], "dateFormat", array()), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 137
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["encaissement"], "facture", array()), "totalFacture", array()), 0, ",", " "), "html", null, true);
                echo "</td>

                            ";
                // line 139
                $context["total_caisse"] = ((isset($context["total_caisse"]) ? $context["total_caisse"] : $this->getContext($context, "total_caisse")) + $this->getAttribute($context["encaissement"], "montant", array()));
                // line 140
                echo "
                            <td align=\"right\">";
                // line 141
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["encaissement"], "montant", array()), 0, ",", " "), "html", null, true);
                echo "</td>
                            <td align=\"right\">";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["encaissement"], "facture", array()), "etat", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encaissement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                ";
        }
        // line 146
        echo "                <tr class=\"vide\">
                    <td colspan=\"5\"> &nbsp; </td>
                </tr>

                ";
        // line 150
        if ((twig_length_filter($this->env, (isset($context["operations"]) ? $context["operations"] : $this->getContext($context, "operations"))) > 0)) {
            // line 151
            echo "                    <tr class=\"heading\">
                        <td width=\"40%\">Nom</td>
                        <td width=\"20%\">Date</td>
                        <td>Montant</td>
                        <td align=\"right\" width=\"20%\">Flux</td>
                        <td align=\"right\" width=\"20%\">Libellé</td>
                    </tr>
                    ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) ? $context["operations"] : $this->getContext($context, "operations")));
            foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
                // line 159
                echo "                        <tr class=\"item\">
                            <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "nom", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 161
                if ($this->getAttribute($context["operation"], "dateOperation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["operation"], "dateOperation", array()), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                            ";
                // line 162
                if (($this->getAttribute($context["operation"], "flux", array()) == "Entrée")) {
                    // line 163
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["operation"], "montant", array()), 0, ",", " "), "html", null, true);
                    echo "</td>
                                ";
                    // line 164
                    $context["total_caisse"] = ((isset($context["total_caisse"]) ? $context["total_caisse"] : $this->getContext($context, "total_caisse")) + $this->getAttribute($context["operation"], "montant", array()));
                    // line 165
                    echo "                            ";
                } elseif (($this->getAttribute($context["operation"], "flux", array()) == "Sortie")) {
                    // line 166
                    echo "                                <td> - ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["operation"], "montant", array()), 0, ",", " "), "html", null, true);
                    echo "</td>
                                ";
                    // line 167
                    $context["total_caisse"] = ((isset($context["total_caisse"]) ? $context["total_caisse"] : $this->getContext($context, "total_caisse")) - $this->getAttribute($context["operation"], "montant", array()));
                    // line 168
                    echo "                            ";
                }
                // line 169
                echo "                            <td align=\"right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "flux", array()), "html", null, true);
                echo "</td>
                            <td align=\"right\">";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["operation"], "libelle", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                ";
        }
        // line 174
        echo "                <tr class=\"vide\">
                    <td colspan=\"5\"> &nbsp; </td>
                </tr>
                <tr class=\"total\">
                    <td colspan=\"2\"></td>
                    <td colspan=\"2\" style=\"text-align: right;font-size: 24px\"><strong>Total caisse :</strong></td>
                    <td align=\"right\" ><strong><span style=\"text-align: right;font-size: 16px\">";
        // line 180
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total_caisse"]) ? $context["total_caisse"] : $this->getContext($context, "total_caisse")), 0, ",", " "), "html", null, true);
        echo "</span></strong></td>
                </tr>
            </table>
        </div>
    </body>
</html>
";
        
        $__internal_f2221a231414f6f22e6cede506ff418e4aa1d6afed76ad71daa5b70fa42db3f0->leave($__internal_f2221a231414f6f22e6cede506ff418e4aa1d6afed76ad71daa5b70fa42db3f0_prof);

    }

    public function getTemplateName()
    {
        return "VentesBundle::sections_ventes/journal_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 180,  286 => 174,  283 => 173,  274 => 170,  269 => 169,  266 => 168,  264 => 167,  259 => 166,  256 => 165,  254 => 164,  249 => 163,  247 => 162,  241 => 161,  237 => 160,  234 => 159,  230 => 158,  221 => 151,  219 => 150,  213 => 146,  210 => 145,  201 => 142,  197 => 141,  194 => 140,  192 => 139,  187 => 137,  181 => 136,  177 => 135,  174 => 134,  170 => 133,  160 => 125,  157 => 124,  155 => 123,  148 => 121,  134 => 110,  129 => 107,  22 => 1,);
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
/*             td{*/
/*                 font-size: 13px !important;*/
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
/*         <div class="invoice-box">*/
/*             <table cellpadding="0" cellspacing="0">*/
/*                 <tr class="top">*/
/*                     <td colspan="5">*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <td class="title">*/
/*                                     {#<img src="{{ asset('design/dist/img/bosoft.png') }}" style="width:130%; max-width:130px;">#}*/
/*                                 </td>*/
/* */
/*                                 <td style="text-align: right">*/
/*                                     Abidjan, le{{'now'|date('d/m/Y') }}*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*                 <tr>*/
/*                     <td colspan="5" style="text-transform: capitalize" align="left"><strong>Objet : &nbsp;</strong>Journal de caisse</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="5" style="text-transform: capitalize" align="left"><strong>Période : &nbsp;</strong> du {{datedebut|date('d/m/Y')}} au {{datefin|date('d/m/Y')}}</td>*/
/*                 </tr>*/
/*                 {% set total_caisse = 0 %}*/
/*                 {% if encaissements|length > 0 %}*/
/*                     <tr class="heading">*/
/*                         <td width="10%">Numero.</td>*/
/*                         <td width="40%">Date</td>*/
/*                         <td>Montant</td>*/
/*                         <td align="right" width="20%">Montant Payé</td>*/
/*                         <td align="right" width="20%">Etat</td>*/
/*                     </tr>*/
/* */
/*                     {% for encaissement in encaissements %}*/
/*                         <tr class="item">*/
/*                             <td>{{ encaissement.facture.numero }}</td>*/
/*                             <td>{% if encaissement.dateFormat %}{{ encaissement.dateFormat|date('d/m/Y') }}{% endif %}</td>*/
/*                             <td>{{ encaissement.facture.totalFacture|number_format(0,',',' ') }}</td>*/
/* */
/*                             {% set total_caisse  = total_caisse  + encaissement.montant %}*/
/* */
/*                             <td align="right">{{encaissement.montant|number_format(0,',',' ')  }}</td>*/
/*                             <td align="right">{{ encaissement.facture.etat }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 <tr class="vide">*/
/*                     <td colspan="5"> &nbsp; </td>*/
/*                 </tr>*/
/* */
/*                 {% if operations|length > 0 %}*/
/*                     <tr class="heading">*/
/*                         <td width="40%">Nom</td>*/
/*                         <td width="20%">Date</td>*/
/*                         <td>Montant</td>*/
/*                         <td align="right" width="20%">Flux</td>*/
/*                         <td align="right" width="20%">Libellé</td>*/
/*                     </tr>*/
/*                     {% for operation in operations %}*/
/*                         <tr class="item">*/
/*                             <td>{{ operation.nom }}</td>*/
/*                             <td>{% if operation.dateOperation %}{{ operation.dateOperation|date('d/m/Y') }}{% endif %}</td>*/
/*                             {% if operation.flux == 'Entrée'  %}*/
/*                                 <td> {{ operation.montant|number_format(0,',',' ') }}</td>*/
/*                                 {% set total_caisse  = total_caisse  + operation.montant %}*/
/*                             {% elseif operation.flux == 'Sortie' %}*/
/*                                 <td> - {{ operation.montant|number_format(0,',',' ') }}</td>*/
/*                                 {% set total_caisse  = total_caisse  - operation.montant %}*/
/*                             {% endif %}*/
/*                             <td align="right">{{operation.flux}}</td>*/
/*                             <td align="right">{{ operation.libelle }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 <tr class="vide">*/
/*                     <td colspan="5"> &nbsp; </td>*/
/*                 </tr>*/
/*                 <tr class="total">*/
/*                     <td colspan="2"></td>*/
/*                     <td colspan="2" style="text-align: right;font-size: 24px"><strong>Total caisse :</strong></td>*/
/*                     <td align="right" ><strong><span style="text-align: right;font-size: 16px">{{total_caisse|number_format(0,',',' ')}}</span></strong></td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
