<?php

/* GestionBundle:Banque:salaire_pdf.html.twig */
class __TwigTemplate_5655b03ede4749f14783ae18f3a11c105435764ad80cdb9e291d8122a653dfcc extends Twig_Template
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
        $__internal_973f47bb07d6f04b4bcd602bad8b45aecbc56654366190f64586662c59d930b0 = $this->env->getExtension("native_profiler");
        $__internal_973f47bb07d6f04b4bcd602bad8b45aecbc56654366190f64586662c59d930b0->enter($__internal_973f47bb07d6f04b4bcd602bad8b45aecbc56654366190f64586662c59d930b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Banque:salaire_pdf.html.twig"));

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
                                <td >
                                    <h2> BULLETIN DE PAIE</h2>  
                                </td>
                                <td style=\"text-align: right\">
                                    Date: ";
        // line 113
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "  &nbsp; &nbsp;  
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class=\"information\">
                    <td colspan=\"2\">
                        <table>
                            <tr>
                                <td style=\"text-align: left\">
                                    <strong>Periode:</strong>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;du  ";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dated", array()), "d/m/Y"), "html", null, true);
        echo " au  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datef", array()), "d/m/Y"), "html", null, true);
        echo "<br />
                                    <strong>Emploi :</strong>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "fonction", array()), "html", null, true);
        echo " <br />
                                    <strong>Matricule :</strong>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "matemp", array()), "html", null, true);
        echo " <br />
                                    <strong>Nationalité :</strong>&nbsp; &nbsp; &nbsp;&nbsp;";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "natemp", array()), "html", null, true);
        echo "<br />
                                </td>

                                <td>
                                </td>
                            </tr>
                        </table>

                    </td>


                    <td colspan=\"2\" >
                        <table>
                            <tr>
                                <td style=\"text-align: right\">
                                    <strong>Mensualité</strong> : 1 mois<br />
                                    <strong>Nom : &nbsp;&nbsp; &nbsp; ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo " </strong><br />
                                    <strong>Prenom : &nbsp;";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</strong><br />
                                    <strong>Opération:  &nbsp;";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libbanque", array()), "html", null, true);
        echo "</strong><br />
                                </td>

                                <td>
                                </td>
                            </tr>
                        </table>

                    </td>

                </tr>

                ";
        // line 159
        echo "                ";
        $context["totalR"] = 0;
        // line 160
        echo "                ";
        $context["totalG"] = 0;
        // line 161
        echo "
                <tr class=\"heading\">
                    <td width=\"30%\">Composante</td>
                    <td width=\"20%\">Taux</td>
                    <td width=\"10%\">Gains</td>
                    <td width=\"20%\">Retenues</td>
                </tr>
                <tr>
                    <td width=\"30%\">Salaire de Base</td>
                    <td>100%</td>
                    <td>";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()), "html", null, true);
        echo "</td>
                </tr>

                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salairecompoTable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["compo"]) {
            echo "  
                    <tr class=\"even pointer\" >
                        <td>";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "composante", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "taux", array()), "html", null, true);
            echo " </td>\t
                        ";
            // line 178
            if (($this->getAttribute($context["compo"], "taux", array()) > 0)) {
                echo "  
                            ";
                // line 179
                $context["quota"] = (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) * $this->getAttribute($context["compo"], "taux", array())) / 100);
                // line 180
                echo "                            ";
                if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                    echo " 
                                <td></td>\t\t\t\t\t\t\t 
                                <td> ";
                    // line 182
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                ";
                    // line 183
                    $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    // line 184
                    echo "                            ";
                } else {
                    // line 185
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                <td></td>\t
                                ";
                    // line 187
                    $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t\t\t\t\t\t\t\t 
                            ";
                }
                // line 189
                echo "                        ";
            } else {
                // line 190
                echo "                            ";
                if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                    echo " 
                                ";
                    // line 191
                    $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                    echo "\t
                                <td></td>
                                <td>";
                    // line 193
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                ";
                    // line 194
                    $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t\t\t\t\t\t\t\t 
                            ";
                } else {
                    // line 196
                    echo "                                ";
                    $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                    // line 197
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                <td></td>
                                ";
                    // line 199
                    $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t
                            ";
                }
                // line 201
                echo "                        ";
            }
            // line 202
            echo "
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                <tr   style=\"font-size:18px;color:black;\">\t

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>


                </tr>

                <tr   style=\"font-size:18px;color:black;\">\t

                    <td></td>
                    <td></td>
                    <td>Total Retenue:</td>
                    <td><b>";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")), "html", null, true);
        echo " FCFA</b></td>


                </tr>
                <tr  style=\"font-size:18px;color:black;\">\t

                    <td></td>
                    <td></td>
                    <td >Total Gain:</td>
                    <td><b>";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")), "html", null, true);
        echo " FCFA</b></td>
                </tr>


                <tr  style=\"color: black;\">

                    <td></td>
                    <td></td>
                    <td width=\"30%\"><h3>Salaire NET à Payer:</h3></td>
                    <td><h3>";
        // line 239
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) - (isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR"))) + (isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG"))), "html", null, true);
        echo " FCFA</h3></td>
                </tr>


            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table >
                <tr>
                    <td style=\"text-align: right; font-size: 18px;\">
                <u>Le directeur Général</u>
                </td>

                </tr>
            </table>
        </div>
    </body>
</html>
";
        
        $__internal_973f47bb07d6f04b4bcd602bad8b45aecbc56654366190f64586662c59d930b0->leave($__internal_973f47bb07d6f04b4bcd602bad8b45aecbc56654366190f64586662c59d930b0_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Banque:salaire_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 239,  355 => 230,  343 => 221,  326 => 206,  317 => 202,  314 => 201,  309 => 199,  303 => 197,  300 => 196,  295 => 194,  291 => 193,  286 => 191,  281 => 190,  278 => 189,  273 => 187,  267 => 185,  264 => 184,  262 => 183,  258 => 182,  252 => 180,  250 => 179,  246 => 178,  242 => 177,  238 => 176,  231 => 174,  225 => 171,  213 => 161,  210 => 160,  207 => 159,  192 => 146,  188 => 145,  184 => 144,  165 => 128,  161 => 127,  157 => 126,  151 => 125,  136 => 113,  22 => 1,);
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
/*                                 <td >*/
/*                                     <h2> BULLETIN DE PAIE</h2>  */
/*                                 </td>*/
/*                                 <td style="text-align: right">*/
/*                                     Date: {{ 'now'|date('d/m/Y') }}  &nbsp; &nbsp;  */
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*                 <tr class="information">*/
/*                     <td colspan="2">*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <td style="text-align: left">*/
/*                                     <strong>Periode:</strong>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;du  {{ entity.dated|date('d/m/Y') }} au  {{ entity.datef|date('d/m/Y') }}<br />*/
/*                                     <strong>Emploi :</strong>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ employe.fonction  }} <br />*/
/*                                     <strong>Matricule :</strong>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;{{ employe.matemp }} <br />*/
/*                                     <strong>Nationalité :</strong>&nbsp; &nbsp; &nbsp;&nbsp;{{ employe.natemp  }}<br />*/
/*                                 </td>*/
/* */
/*                                 <td>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/* */
/*                     </td>*/
/* */
/* */
/*                     <td colspan="2" >*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <td style="text-align: right">*/
/*                                     <strong>Mensualité</strong> : 1 mois<br />*/
/*                                     <strong>Nom : &nbsp;&nbsp; &nbsp; {{ employe.nomemp  }} </strong><br />*/
/*                                     <strong>Prenom : &nbsp;{{ employe.prenomemp  }}</strong><br />*/
/*                                     <strong>Opération:  &nbsp;{{ entity.libbanque}}</strong><br />*/
/*                                 </td>*/
/* */
/*                                 <td>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/* */
/*                     </td>*/
/* */
/*                 </tr>*/
/* */
/*                 {# les produits #}*/
/*                 {% set totalR = 0 %}*/
/*                 {% set totalG = 0 %}*/
/* */
/*                 <tr class="heading">*/
/*                     <td width="30%">Composante</td>*/
/*                     <td width="20%">Taux</td>*/
/*                     <td width="10%">Gains</td>*/
/*                     <td width="20%">Retenues</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td width="30%">Salaire de Base</td>*/
/*                     <td>100%</td>*/
/*                     <td>{{ employe.salbase }}</td>*/
/*                 </tr>*/
/* */
/*                 {%for compo in entity.salairecompoTable%}  */
/*                     <tr class="even pointer" >*/
/*                         <td>{{ compo.composante }}</td>*/
/*                         <td>{{ compo.taux }} </td>	*/
/*                         {% if compo.taux > 0 %}  */
/*                             {% set quota = (employe.salbase * compo.taux)/100 %}*/
/*                             {% if compo.type=='retenue' %} */
/*                                 <td></td>							 */
/*                                 <td> {{ quota }}</td>*/
/*                                 {% set totalR = totalR + quota %}*/
/*                             {% else %}*/
/*                                 <td>{{ quota }}</td>*/
/*                                 <td></td>	*/
/*                                 {% set totalG = totalG + quota %}								 */
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if compo.type=='retenue'  %} */
/*                                 {% set quota = compo.montant %}	*/
/*                                 <td></td>*/
/*                                 <td>{{ quota }}</td>*/
/*                                 {% set totalR = totalR + quota %}								 */
/*                             {% else %}*/
/*                                 {% set quota = compo.montant %}*/
/*                                 <td>{{ quota }}</td>*/
/*                                 <td></td>*/
/*                                 {% set totalG = totalG + quota %}	*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                     </tr>*/
/* */
/*                 {% endfor %}*/
/*                 <tr   style="font-size:18px;color:black;">	*/
/* */
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/* */
/* */
/*                 </tr>*/
/* */
/*                 <tr   style="font-size:18px;color:black;">	*/
/* */
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td>Total Retenue:</td>*/
/*                     <td><b>{{ totalR }} FCFA</b></td>*/
/* */
/* */
/*                 </tr>*/
/*                 <tr  style="font-size:18px;color:black;">	*/
/* */
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td >Total Gain:</td>*/
/*                     <td><b>{{ totalG }} FCFA</b></td>*/
/*                 </tr>*/
/* */
/* */
/*                 <tr  style="color: black;">*/
/* */
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td width="30%"><h3>Salaire NET à Payer:</h3></td>*/
/*                     <td><h3>{{ employe.salbase - totalR + totalG  }} FCFA</h3></td>*/
/*                 </tr>*/
/* */
/* */
/*             </table>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <br>*/
/*             <table >*/
/*                 <tr>*/
/*                     <td style="text-align: right; font-size: 18px;">*/
/*                 <u>Le directeur Général</u>*/
/*                 </td>*/
/* */
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
