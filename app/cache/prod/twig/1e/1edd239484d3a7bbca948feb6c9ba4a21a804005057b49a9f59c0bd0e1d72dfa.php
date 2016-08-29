<?php

/* TopxiaWebBundle:Importer:import.step3.html.twig */
class __TwigTemplate_e83e1697d7de0208ffbb290318f1950550321da19d35eaef3ed97ce121726de7 extends Twig_Template
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
    <div class=\"panel-heading\">学员批量导入-步骤3</div>
    <div class=\"panel-body\">
        <div class=\"col-md-offset-2\">导入成功 <b>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count"]) ? $context["count"] : null), "successCount", array()), "html", null, true);
        echo "</b> 个，<b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count"]) ? $context["count"] : null), "existsUserCount", array()), "html", null, true);
        echo "</b>个存在重复，已自动跳过。</div><br>
        <div class=\"col-md-offset-2\">
          <a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["validateRout"]) ? $context["validateRout"] : null), array("id" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()))), "html", null, true);
        echo "\">继续导入</a>
        </div>
        
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Importer:import.step3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel panel-default panel-col">*/
/*     <div class="panel-heading">学员批量导入-步骤3</div>*/
/*     <div class="panel-body">*/
/*         <div class="col-md-offset-2">导入成功 <b>{{ count.successCount }}</b> 个，<b>{{ count.existsUserCount }}</b>个存在重复，已自动跳过。</div><br>*/
/*         <div class="col-md-offset-2">*/
/*           <a type="button" class="btn btn-primary" href="{{ path(validateRout, {id:targetObject.id}) }}">继续导入</a>*/
/*         </div>*/
/*         */
/*     </div>*/
/* </div>*/
