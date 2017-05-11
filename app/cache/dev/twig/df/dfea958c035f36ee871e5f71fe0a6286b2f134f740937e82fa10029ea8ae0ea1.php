<?php

/* GestionBundle:Banque:new.html.twig */
class __TwigTemplate_0cf86125d8225058b25bb33f28a7247e3ef430d2e92ac44078b2ef221bda3b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionBundle::layout_gestion.html.twig", "GestionBundle:Banque:new.html.twig", 1);
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
        $__internal_c193ecb2231ece1db426c571ce956e77705455e84cb5ea8fbfe644be4443359e = $this->env->getExtension("native_profiler");
        $__internal_c193ecb2231ece1db426c571ce956e77705455e84cb5ea8fbfe644be4443359e->enter($__internal_c193ecb2231ece1db426c571ce956e77705455e84cb5ea8fbfe644be4443359e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Banque:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c193ecb2231ece1db426c571ce956e77705455e84cb5ea8fbfe644be4443359e->leave($__internal_c193ecb2231ece1db426c571ce956e77705455e84cb5ea8fbfe644be4443359e_prof);

    }

    // line 3
    public function block_container_gestion($context, array $blocks = array())
    {
        $__internal_894d04c9d90cc549c65a88c3ba5e867474e0d7d3eb2be7b5846f2b6e1009cff7 = $this->env->getExtension("native_profiler");
        $__internal_894d04c9d90cc549c65a88c3ba5e867474e0d7d3eb2be7b5846f2b6e1009cff7->enter($__internal_894d04c9d90cc549c65a88c3ba5e867474e0d7d3eb2be7b5846f2b6e1009cff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_gestion"));

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
                    
                        <select id=\"libbanque\" name=\"libbanque\" class=\"form-control\" >
                            <option value=\"\">select</option>
                            <option value=\"Caisse\">Caisse</option>
                            <option value=\"Banque\">Banque</option>
                        </select>
                    
                </div>   
                <div class=\"form-group\">
                    <label>Date Début</label>
                    <input type=\"text\" name=\"datedebut\" required=\"required\" class=\"form-control datetimepicker\"> 
                </div>   
                <div class=\"form-group\">
                    <label>Date Fin</label>
                    <input type=\"text\" id=\"datefin\" name=\"datefin\" required=\"required\" class=\"form-control datetimepicker\">
                </div>   
                <input type=\"submit\" value=\"Valider\" class=\"btn btn-success\" />

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
        // line 40
        $context["totalR"] = 0;
        // line 41
        echo "                    ";
        $context["totalG"] = 0;
        // line 42
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableauCompo"]) ? $context["tableauCompo"] : $this->getContext($context, "tableauCompo")));
        foreach ($context['_seq'] as $context["_key"] => $context["compo"]) {
            echo "  
                        <tr class=\"even pointer\" >
                            <td class=\"a-center \"><input type=\"checkbox\" checked=\"checked\" name=\"compo";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "id", array()), "html", null, true);
            echo "\" /></td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "composante", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["compo"], "taux", array()), "html", null, true);
            echo " </td>\t
                            ";
            // line 47
            if (($this->getAttribute($context["compo"], "taux", array()) > 0)) {
                echo "  
                                ";
                // line 48
                $context["quota"] = (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) * $this->getAttribute($context["compo"], "taux", array())) / 100);
                // line 49
                echo "                                ";
                if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                    echo "  
                                    <td></td>\t\t\t\t\t\t\t 
                                    <td> ";
                    // line 51
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                    ";
                    // line 52
                    $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    // line 53
                    echo "                                ";
                } else {
                    echo " 
                                    <td>";
                    // line 54
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                    <td></td>\t\t\t\t\t\t\t\t 
                                    ";
                    // line 56
                    $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t\t\t\t\t\t\t\t 
                                ";
                }
                // line 58
                echo "                            ";
            } else {
                // line 59
                echo "                                ";
                if (($this->getAttribute($context["compo"], "type", array()) == "retenue")) {
                    echo " 
                                    ";
                    // line 60
                    $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                    echo "\t
                                    <td></td>
                                    <td>";
                    // line 62
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>\t
                                    ";
                    // line 63
                    $context["totalR"] = ((isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t\t\t\t\t\t\t\t 
                                ";
                } else {
                    // line 65
                    echo "                                    ";
                    $context["quota"] = $this->getAttribute($context["compo"], "montant", array());
                    echo "\t
                                    <td>";
                    // line 66
                    echo twig_escape_filter($this->env, (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")), "html", null, true);
                    echo "</td>
                                    <td></td>\t\t\t\t\t\t\t\t 
                                    ";
                    // line 68
                    $context["totalG"] = ((isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")) + (isset($context["quota"]) ? $context["quota"] : $this->getContext($context, "quota")));
                    echo "\t
                                ";
                }
                // line 70
                echo "                            ";
            }
            // line 71
            echo "
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    <br />
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
        // line 91
        echo twig_escape_filter($this->env, (isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>

                        <td colspan=\"2\">Total Retenue:</td>
                        <td></td>
                        <td colspan=\"2\"> ";
        // line 97
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
        // line 107
        $context["salaire"] = (($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salbase", array()) - (isset($context["totalR"]) ? $context["totalR"] : $this->getContext($context, "totalR"))) + (isset($context["totalG"]) ? $context["totalG"] : $this->getContext($context, "totalG")));
        // line 108
        echo "
                        <td  colspan=\"2\">Salaire Net</td>
                        <td width=\"20%\"></td>
                        <td  colspan=\"2\">";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["salaire"]) ? $context["salaire"] : $this->getContext($context, "salaire")), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
        </form>

    </div>


    <a class=\"btn btn-primary pull-right\" href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("banque", array("idemp" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
        echo "\">
        Retour
    </a>

";
        
        $__internal_894d04c9d90cc549c65a88c3ba5e867474e0d7d3eb2be7b5846f2b6e1009cff7->leave($__internal_894d04c9d90cc549c65a88c3ba5e867474e0d7d3eb2be7b5846f2b6e1009cff7_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Banque:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 120,  235 => 111,  230 => 108,  228 => 107,  215 => 97,  206 => 91,  188 => 75,  179 => 71,  176 => 70,  171 => 68,  166 => 66,  161 => 65,  156 => 63,  152 => 62,  147 => 60,  142 => 59,  139 => 58,  134 => 56,  129 => 54,  124 => 53,  122 => 52,  118 => 51,  112 => 49,  110 => 48,  106 => 47,  102 => 46,  98 => 45,  94 => 44,  86 => 42,  83 => 41,  81 => 40,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GestionBundle::layout_gestion.html.twig' %}*/
/* */
/* {% block container_gestion %}*/
/*     <h1>Validation de salaire</h1>*/
/*     <div class="row">*/
/*         <form method="post" action="{{path('banque_create', {'idemp':employe.id})}}">*/
/*             <div class="col-md-6">*/
/*                 <div class="form-group">*/
/*                     <label>Mode paiement</label>*/
/*                     */
/*                         <select id="libbanque" name="libbanque" class="form-control" >*/
/*                             <option value="">select</option>*/
/*                             <option value="Caisse">Caisse</option>*/
/*                             <option value="Banque">Banque</option>*/
/*                         </select>*/
/*                     */
/*                 </div>   */
/*                 <div class="form-group">*/
/*                     <label>Date Début</label>*/
/*                     <input type="text" name="datedebut" required="required" class="form-control datetimepicker"> */
/*                 </div>   */
/*                 <div class="form-group">*/
/*                     <label>Date Fin</label>*/
/*                     <input type="text" id="datefin" name="datefin" required="required" class="form-control datetimepicker">*/
/*                 </div>   */
/*                 <input type="submit" value="Valider" class="btn btn-success" />*/
/* */
/*             </div>*/
/*             <div class="col-md-6">*/
/* */
/*                 <table class="table table-striped table-hover">*/
/* */
/*                     <tr class="heading bg-blue">*/
/*                         <th width="10%"></th>*/
/*                         <th width="10%">Composante</th>*/
/*                         <th width="20%">Taux</th>*/
/*                         <th width="20%">Gains</th>*/
/*                         <th width="20%">Retenues</th>*/
/*                     </tr>*/
/*                     {% set totalR = 0 %}*/
/*                     {% set totalG = 0 %}*/
/*                     {% for compo in tableauCompo %}  */
/*                         <tr class="even pointer" >*/
/*                             <td class="a-center "><input type="checkbox" checked="checked" name="compo{{ compo.id }}" /></td>*/
/*                             <td>{{ compo.composante }}</td>*/
/*                             <td>{{ compo.taux }} </td>	*/
/*                             {% if compo.taux > 0 %}  */
/*                                 {% set quota = (employe.salbase * compo.taux)/100 %}*/
/*                                 {% if compo.type=='retenue' %}  */
/*                                     <td></td>							 */
/*                                     <td> {{ quota }}</td>*/
/*                                     {% set totalR = totalR + quota %}*/
/*                                 {% else %} */
/*                                     <td>{{ quota }}</td>*/
/*                                     <td></td>								 */
/*                                     {% set totalG = totalG + quota %}								 */
/*                                 {% endif %}*/
/*                             {% else %}*/
/*                                 {% if compo.type=='retenue'  %} */
/*                                     {% set quota = compo.montant %}	*/
/*                                     <td></td>*/
/*                                     <td>{{ quota }}</td>	*/
/*                                     {% set totalR = totalR + quota %}								 */
/*                                 {% else %}*/
/*                                     {% set quota = compo.montant %}	*/
/*                                     <td>{{ quota }}</td>*/
/*                                     <td></td>								 */
/*                                     {% set totalG = totalG + quota %}	*/
/*                                 {% endif %}*/
/*                             {% endif %}*/
/* */
/*                         </tr>*/
/* */
/*                     {% endfor %}*/
/*                     <br />*/
/*                 </table>*/
/*                 <table class="pull-right">*/
/* */
/* */
/*                     <tr>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td ></td>*/
/*                         <td></td>*/
/*                         <td></td>	*/
/*                     </tr>*/
/*                     <tr>*/
/* */
/*                         <td colspan="2">Total Gain:</td>*/
/*                         <td></td>*/
/*                         <td colspan="2">{{ totalG }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/* */
/*                         <td colspan="2">Total Retenue:</td>*/
/*                         <td></td>*/
/*                         <td colspan="2"> {{ totalR }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>					*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                     </tr>*/
/*                     <tr >*/
/*                         {% set salaire = employe.salbase - totalR + totalG %}*/
/* */
/*                         <td  colspan="2">Salaire Net</td>*/
/*                         <td width="20%"></td>*/
/*                         <td  colspan="2">{{ salaire }}</td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </div>*/
/*         </form>*/
/* */
/*     </div>*/
/* */
/* */
/*     <a class="btn btn-primary pull-right" href="{{ path('banque', { 'idemp': employe.id }) }}">*/
/*         Retour*/
/*     </a>*/
/* */
/* {% endblock %}*/
/* */
