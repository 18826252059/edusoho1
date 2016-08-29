<?php

/* TopxiaAdminBundle:OperationAnalysis:video-view.table.html.twig */
class __TwigTemplate_23ef27d27a73c30086247bfc6e7599c3c061792e937ec2d982600a1c4f1e8ca4 extends Twig_Template
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
        echo "      <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
          <thead>
            <tr>
              <th>用户名</th>
              <th>课时</th>
              <th>观看时间</th>
              <th>视频类型</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 11
        if ((isset($context["videoViewedDetail"]) ? $context["videoViewedDetail"] : null)) {
            // line 12
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videoViewedDetail"]) ? $context["videoViewedDetail"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "
              ";
                // line 14
                if ((($this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["val"], "lessonId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["val"], "lessonId", array()), array(), "array", false, true), "title", array()), null)) : (null))) {
                    // line 15
                    echo "                  <tr>
                    <td>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["val"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["val"], "lessonId", array()), array(), "array"), "title", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute($context["val"], "createdTime", array())), "html", null, true);
                    echo "</td>
                  \t<td>";
                    // line 19
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("videoStorageType", $this->getAttribute($context["val"], "fileStorage", array()));
                    echo "</td>
                  </tr>
                  ";
                } else {
                    // line 22
                    echo "                  <tr class=\"danger\">
                    <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["val"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "</td>
                    <td>(此课时已删除)</td>
                    <td>";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute($context["val"], "createdTime", array())), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 26
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("videoStorageType", $this->getAttribute($context["val"], "fileStorage", array()));
                    echo "</td>
                  </tr>
                  ";
                }
                // line 29
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            ";
        }
        // line 31
        echo "          </tbody>
      </table>    
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:video-view.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  91 => 31,  88 => 30,  82 => 29,  76 => 26,  72 => 25,  67 => 23,  64 => 22,  58 => 19,  54 => 18,  50 => 17,  46 => 16,  43 => 15,  41 => 14,  38 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>用户名</th>*/
/*               <th>课时</th>*/
/*               <th>观看时间</th>*/
/*               <th>视频类型</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if videoViewedDetail %}*/
/*               {% for key,val in videoViewedDetail %}*/
/* */
/*               {% if  lessons[val.lessonId].title|default(null)  %}*/
/*                   <tr>*/
/*                     <td>{{ users[val.userId].nickname }}</td>*/
/*                     <td>{{ lessons[val.lessonId].title }}</td>*/
/*                     <td>{{val.createdTime|date_format}}</td>*/
/*                   	<td>{{dict_text('videoStorageType',val.fileStorage)}}</td>*/
/*                   </tr>*/
/*                   {% else %}*/
/*                   <tr class="danger">*/
/*                     <td>{{ users[val.userId].nickname }}</td>*/
/*                     <td>(此课时已删除)</td>*/
/*                     <td>{{val.createdTime|date_format}}</td>*/
/*                     <td>{{dict_text('videoStorageType',val.fileStorage)}}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*               {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
