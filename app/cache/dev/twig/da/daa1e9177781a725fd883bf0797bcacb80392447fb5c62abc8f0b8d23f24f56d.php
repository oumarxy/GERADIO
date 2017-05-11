<?php

/* GestionBundle:Banque:new_confirm.html.twig */
class __TwigTemplate_a79dd48db9f9a2564a4145a78781930083af42ace1dec479c851143b1229ab81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Banque:new_confirm.html.twig", 1);
        $this->blocks = array(
            'container_gestion' => array($this, 'block_container_gestion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionBundle::layout_gestion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75077bd71f59b5878387aa3e387768a00957752de233e5e103473f7927cc733b = $this->env->getExtension("native_profiler");
        $__internal_75077bd71f59b5878387aa3e387768a00957752de233e5e103473f7927cc733b->enter($__internal_75077bd71f59b5878387aa3e387768a00957752de233e5e103473f7927cc733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Banque:new_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75077bd71f59b5878387aa3e387768a00957752de233e5e103473f7927cc733b->leave($__internal_75077bd71f59b5878387aa3e387768a00957752de233e5e103473f7927cc733b_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_e42c2b941575f028fe37136d432410b508c57af5601e80b20904ae6a8806152f = $this->env->getExtension("native_profiler");
        $__internal_e42c2b941575f028fe37136d432410b508c57af5601e80b20904ae6a8806152f->enter($__internal_e42c2b941575f028fe37136d432410b508c57af5601e80b20904ae6a8806152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

        // line 4
        echo "    <h1>Validation de salaire</h1>
    <div class=\"row\">
       <form method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque_create", array("idemp" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
        echo "\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                <label>Mode paiement</label>
                <input type=\"text\" name=\"libbanque\" class=\"form-control\"  placeholder=\"Banque\">
            </div>   
            <div class=\"form-group\">
                <label>Date Début</label>
                <input type=\"text\" name=\"Datedebut\" required=\"required\" class=\"form-control datetimepicker\"> 
            </div>   
            <div class=\"form-group\">
                <label>Date Fin</label>
                <input type=\"text\" id=\"datefin\" name=\"datefin\" required=\"required\" class=\"form-control datetimepicker\">
            </div>   
        </div>
        <div class=\"col-md-6\">

            <table class=\"table table-striped table-hover\">

                <tr class=\"heading bg-blue\">
                    <th width=\"10%\"></th>
                    <th width=\"10%\">Composante</th>
                    <th width=\"20%\">Taux</th>
                    <th width=\"20%\">Gains</th>
                    <th width=\"20%\">Retenues</th>
                </tr>
                ";
        // line 32
        $context["totalR"] = 0;
        // line 33
        echo "                ";
        $context["totalG"] = 0;
        // line 34
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauCompo"]) ? $context["tableauCompo"] : $this->getContext($context, "tableauCompo")));
        foreach ($context['_seq'] as $context["_key"] => $context["compo"]) {
            echo "  
                    <tr class=\"even pointer\" >
                        <td class=\"a-center \"><input type=\"checkbox\" checked=\"checked\" name=\"compo";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "id", array()), "html", null, true);
            echo "\" /></td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "composante", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "taux", array()), "html", null, true);
            echo " </td>\t
                        ";
            // line 39
            if (($this->getAttribute($context["compo"], "taux", array()) > 0)) {
                echo "  
                            ";
                // line 40
                $context["quota"] = (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) * $this->getAttribute($context["compo"], "taux", array())) / 100);
                // line 41
                echo "                            ";
                if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                    echo "  
                                <td></td>\t\t\t\t\t\t\t 
                                <td> ";
                    // line 43
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                ";
                    // line 44
                    $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    // line 45
                    echo "                            ";
                } else {
                    // line 46
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                <td></td>\t\t\t\t\t\t\t\t 
                                ";
                    // line 48
                    $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t\t\t\t\t\t\t\t 
                            ";
                }
                // line 50
                echo "                        ";
            } else {
                // line 51
                echo "                            ";
                if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                    echo " 
                                ";
                    // line 52
                    $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                    echo "\t
                                <td></td>
                                <td>";
                    // line 54
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>\t
                                ";
                    // line 55
                    $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t\t\t\t\t\t\t\t 
                            ";
                } else {
                    // line 57
                    echo "                                ";
                    $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                    echo "\t
                                <td>";
                    // line 58
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                <td></td>\t\t\t\t\t\t\t\t 
                                ";
                    // line 60
                    $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t
                            ";
                }
                // line 62
                echo "                        ";
            }
            // line 63
            echo "
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                <br />
            </table>
            <table class=\"pull-right\">


                <tr>
                    <td></td>
                    <td></td>
                    <td ></td>
                    <td></td>
                    <td></td>\t
                </tr>
                <tr>

                    <td colspan=\"2\">Total Gain:</td>
                    <td></td>
                    <td colspan=\"2\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")), "html", null, true);
        echo "</td>
                </tr>
                <tr>

                    <td colspan=\"2\">Total Retenue:</td>
                    <td></td>
                    <td colspan=\"2\"> ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>\t\t\t\t\t
                    <td></td>
                    <td></td>
                </tr>
                <tr >
                    ";
        // line 99
        $context["salaire"] = (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) - (isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR"))) + (isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")));
        // line 100
        echo "
                    <td  colspan=\"2\">Salaire</td>
                    <td width=\"20%\"></td>
                    <td  colspan=\"2\">";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["salaire"]) ? $context["salaire"] : $this->getContext($context, "salaire")), "html", null, true);
        echo "</td>
                </tr>




            </table>
        </div>
                        </form>

        </div>


    <a class=\"btn btn-primary\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque", array("idemp" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
        echo "\">
        Back to the list
    </a>

";
        
        $__internal_e42c2b941575f028fe37136d432410b508c57af5601e80b20904ae6a8806152f->leave($__internal_e42c2b941575f028fe37136d432410b508c57af5601e80b20904ae6a8806152f_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Banque:new_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 116,  226 => 103,  221 => 100,  219 => 99,  206 => 89,  197 => 83,  179 => 67,  170 => 63,  167 => 62,  162 => 60,  157 => 58,  152 => 57,  147 => 55,  143 => 54,  138 => 52,  133 => 51,  130 => 50,  125 => 48,  119 => 46,  116 => 45,  114 => 44,  110 => 43,  104 => 41,  102 => 40,  98 => 39,  94 => 38,  90 => 37,  86 => 36,  78 => 34,  75 => 33,  73 => 32,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Validation de salaire</h1>*/
/*     <div class="row">*/
/*        <form method="post" action="{{path('banque_create', {'idemp':employe.id})}}">*/
/*         <div class="col-md-6">*/
/*             <div class="form-group">*/
/*                 <label>Mode paiement</label>*/
/*                 <input type="text" name="libbanque" class="form-control"  placeholder="Banque">*/
/*             </div>   */
/*             <div class="form-group">*/
/*                 <label>Date Début</label>*/
/*                 <input type="text" name="Datedebut" required="required" class="form-control datetimepicker"> */
/*             </div>   */
/*             <div class="form-group">*/
/*                 <label>Date Fin</label>*/
/*                 <input type="text" id="datefin" name="datefin" required="required" class="form-control datetimepicker">*/
/*             </div>   */
/*         </div>*/
/*         <div class="col-md-6">*/
/* */
/*             <table class="table table-striped table-hover">*/
/* */
/*                 <tr class="heading bg-blue">*/
/*                     <th width="10%"></th>*/
/*                     <th width="10%">Composante</th>*/
/*                     <th width="20%">Taux</th>*/
/*                     <th width="20%">Gains</th>*/
/*                     <th width="20%">Retenues</th>*/
/*                 </tr>*/
/*                 {% set totalR = 0 %}*/
/*                 {% set totalG = 0 %}*/
/*                 {% for compo in tableauCompo %}  */
/*                     <tr class="even pointer" >*/
/*                         <td class="a-center "><input type="checkbox" checked="checked" name="compo{{ compo.id }}" /></td>*/
/*                         <td>{{ compo.composante }}</td>*/
/*                         <td>{{ compo.taux }} </td>	*/
/*                         {% if compo.taux > 0 %}  */
/*                             {% set quota = (employe.salbase * compo.taux)/100 %}*/
/*                             {% if compo.type=='retenue' %}  */
/*                                 <td></td>							 */
/*                                 <td> {{ quota }}</td>*/
/*                                 {% set totalR = totalR + quota %}*/
/*                             {% else %}*/
/*                                 <td>{{ quota }}</td>*/
/*                                 <td></td>								 */
/*                                 {% set totalG = totalG + quota %}								 */
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if compo.type=='retenue'  %} */
/*                                 {% set quota = compo.montant %}	*/
/*                                 <td></td>*/
/*                                 <td>{{ quota }}</td>	*/
/*                                 {% set totalR = totalR + quota %}								 */
/*                             {% else %}*/
/*                                 {% set quota = compo.montant %}	*/
/*                                 <td>{{ quota }}</td>*/
/*                                 <td></td>								 */
/*                                 {% set totalG = totalG + quota %}	*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/*                     </tr>*/
/* */
/*                 {% endfor %}*/
/*                 <br />*/
/*             </table>*/
/*             <table class="pull-right">*/
/* */
/* */
/*                 <tr>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td ></td>*/
/*                     <td></td>*/
/*                     <td></td>	*/
/*                 </tr>*/
/*                 <tr>*/
/* */
/*                     <td colspan="2">Total Gain:</td>*/
/*                     <td></td>*/
/*                     <td colspan="2">{{ totalG }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/* */
/*                     <td colspan="2">Total Retenue:</td>*/
/*                     <td></td>*/
/*                     <td colspan="2"> {{ totalR }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>					*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                 </tr>*/
/*                 <tr >*/
/*                     {% set salaire = employe.salbase - totalR + totalG %}*/
/* */
/*                     <td  colspan="2">Salaire</td>*/
/*                     <td width="20%"></td>*/
/*                     <td  colspan="2">{{ salaire }}</td>*/
/*                 </tr>*/
/* */
/* */
/* */
/* */
/*             </table>*/
/*         </div>*/
/*                         </form>*/
/* */
/*         </div>*/
/* */
/* */
/*     <a class="btn btn-primary" href="{{ path('banque', { 'idemp': employe.id }) }}">*/
/*         Back to the list*/
/*     </a>*/
/* */
/* {% endblock %}*/
/* */
