<?php

/* GestionBundle:Employe:employe_pdf.html.twig */
class __TwigTemplate_398053bb8e3bbde29a969c5958bfb0aaf4b74a018b8766269377f9c77f61079b extends Twig_Template
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
                        <table>
                            <tr>
                                <td >
                                    <h2> Liste des employés</h2>  
                                </td>
                                <td style=\"text-align: right\">
                                    Date: ";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo " 
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class=\"heading\">
                    <td width=\"10%\">Nom</td>
                    <td width=\"20%\">Prenom</td>
                    <td width=\"20%\">Fonction</td>
                    <td width=\"20%\">Tel</td>
                    <td width=\"20%\">Email</td>
                </tr>
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "  
                    <tr class=\"even pointer\" >
                        <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomemp", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenomemp", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fonction", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "celemp", array()), "html", null, true);
            echo " </td>\t
                        <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "emailemp", array()), "html", null, true);
            echo " </td>\t\t\t\t\t\t\t\t 
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
            </table>

        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "GestionBundle:Employe:employe_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 130,  167 => 127,  163 => 126,  159 => 125,  155 => 124,  151 => 123,  144 => 121,  127 => 107,  19 => 1,);
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
/*                         <table>*/
/*                             <tr>*/
/*                                 <td >*/
/*                                     <h2> Liste des employés</h2>  */
/*                                 </td>*/
/*                                 <td style="text-align: right">*/
/*                                     Date: {{ 'now'|date('d/m/Y') }} */
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*                 <tr class="heading">*/
/*                     <td width="10%">Nom</td>*/
/*                     <td width="20%">Prenom</td>*/
/*                     <td width="20%">Fonction</td>*/
/*                     <td width="20%">Tel</td>*/
/*                     <td width="20%">Email</td>*/
/*                 </tr>*/
/*                 {% for entity in entities  %}  */
/*                     <tr class="even pointer" >*/
/*                         <td>{{ entity.nomemp }}</td>*/
/*                         <td>{{ entity.prenomemp }} </td>*/
/*                         <td>{{ entity.fonction  }} </td>*/
/*                         <td>{{ entity.celemp  }} </td>	*/
/*                         <td>{{ entity.emailemp }} </td>								 */
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*             </table>*/
/* */
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
