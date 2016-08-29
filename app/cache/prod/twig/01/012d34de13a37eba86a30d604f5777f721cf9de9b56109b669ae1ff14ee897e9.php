<?php

/* TopxiaWebBundle:Importer:import.step2.html.twig */
class __TwigTemplate_6402411b42385120e74f44679f3cd3099b8e48ab5c003c5a2987dac6059315db extends Twig_Template
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
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">学员批量导入</div>
  <div class=\"panel-body\">
    <form method=\"post\" enctype=\"multipart/form-data\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "excel_import_url", array()), array("id" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 5
        if ((isset($context["errorInfo"]) ? $context["errorInfo"] : null)) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["errorInfo"]);
            foreach ($context['_seq'] as $context["_key"] => $context["errorInfo"]) {
                // line 7
                echo "         <div class=\"col-md-offset-2\">";
                echo $context["errorInfo"];
                echo "</div><br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        <div class=\"col-md-offset-2\"><a type=\"button\" class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "excel_validate_url", array()), array("id" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()))), "html", null, true);
            echo "\">重新导入</a>
        </div> 
      ";
        } else {
            // line 12
            echo "        ";
            if ((isset($context["checkInfo"]) ? $context["checkInfo"] : null)) {
                // line 13
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["checkInfo"]);
                foreach ($context['_seq'] as $context["_key"] => $context["checkInfo"]) {
                    // line 14
                    echo "            <div class=\"col-md-offset-2\">";
                    echo twig_escape_filter($this->env, $context["checkInfo"], "html", null, true);
                    echo "</div><br>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkInfo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        ";
            }
            // line 17
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        <input type=\"hidden\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["allUserData"]) ? $context["allUserData"] : null), "html", null, true);
            echo "\" name=\"data\">
        <div class=\"col-md-offset-2\">校验成功！一共包含 <b>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["userCount"]) ? $context["userCount"] : null), "html", null, true);
            echo "</b>个用户信息</div><br>
        <div class=\"col-md-offset-2\"><button type=\"submit\" class=\"btn btn-primary\" id=\"start-import-btn\" >确定导入</button> <a type=\"button\" class=\"btn btn-primary\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "excel_validate_url", array()), array("id" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()))), "html", null, true);
            echo "\">返回</a></div>
      ";
        }
        // line 22
        echo "    </form>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Importer:import.step2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  84 => 20,  80 => 19,  76 => 18,  71 => 17,  68 => 16,  59 => 14,  54 => 13,  51 => 12,  44 => 9,  35 => 7,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">学员批量导入</div>*/
/*   <div class="panel-body">*/
/*     <form method="post" enctype="multipart/form-data" action="{{ path(data.excel_import_url, {id:targetObject.id}) }}">*/
/*       {% if errorInfo %}*/
/*         {% for errorInfo in errorInfo%}*/
/*          <div class="col-md-offset-2">{{errorInfo|raw}}</div><br>*/
/*         {% endfor %}*/
/*         <div class="col-md-offset-2"><a type="button" class="btn btn-primary" href="{{ path(data.excel_validate_url, {id:targetObject.id}) }}">重新导入</a>*/
/*         </div> */
/*       {% else %}*/
/*         {% if checkInfo %}*/
/*           {% for checkInfo in checkInfo%}*/
/*             <div class="col-md-offset-2">{{checkInfo}}</div><br>*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <input type="hidden" value="{{allUserData}}" name="data">*/
/*         <div class="col-md-offset-2">校验成功！一共包含 <b>{{userCount}}</b>个用户信息</div><br>*/
/*         <div class="col-md-offset-2"><button type="submit" class="btn btn-primary" id="start-import-btn" >确定导入</button> <a type="button" class="btn btn-primary" href="{{ path(data.excel_validate_url, {id:targetObject.id}) }}">返回</a></div>*/
/*       {% endif %}*/
/*     </form>*/
/*   </div>*/
/* </div>*/
