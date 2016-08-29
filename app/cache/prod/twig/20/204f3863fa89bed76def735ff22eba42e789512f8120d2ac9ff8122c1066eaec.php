<?php

/* ClassroomBundle:Classroom:sign.html.twig */
class __TwigTemplate_0b06fa0d80d5ee2ec8fc75c9ed39c2a18b0ddcf204cc787190f23d95ea96d92c extends Twig_Template
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
        echo "<div class=\"panel panel-default class-signin\">
  <div class=\"panel-body\">
    <div id=\"classroom-sign\"  data-records=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_signed_records", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" data-signurl=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_sign", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" >
      <i class=\"es-icon es-icon-today\"></i>
      ";
        // line 5
        if ( !(isset($context["isSignedToday"]) ? $context["isSignedToday"] : null)) {
            // line 6
            echo "        <span class=\"date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
            echo "月";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
            echo "日</span>
        <!-- <br> -->
        <!-- 星期";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["week"]) ? $context["week"] : null), "html", null, true);
            echo " -->
      ";
        } else {
            // line 10
            echo "        <span class=\"date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
            echo "月";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
            echo "日</span>
        <!-- <br>漏签<span style=\"color:red;\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["notSign"]) ? $context["notSign"] : null), "html", null, true);
            echo "</span>天 -->
      ";
        }
        // line 13
        echo "      <div id=\"sign\">
        ";
        // line 14
        if ( !(isset($context["isSignedToday"]) ? $context["isSignedToday"] : null)) {
            // line 15
            echo "          <div class=\"sign-area\"  data-role=\"sign\">
            <a class=\"btn-signin\" href=\"javascript:;\">
              签到
            </a>
          </div>
        ";
        } else {
            // line 21
            echo "          <div class=\"sign-area\" data-role=\"signed\" onclick=\"return false;\" >
            <a class=\"btn-signin after\" >已签到
            <br>连续";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSignStatistics"]) ? $context["userSignStatistics"] : null), "keepDays", array()), "html", null, true);
            echo "天</a>
          </div>
        ";
        }
        // line 26
        echo "      </div>
      <div class=\"sign_main\" style=\"display:none\">
        <div class=\"\">
          <div class=\"calendar_title_month clearfix\">
            <span class=\"pull-left glyphicon glyphicon-chevron-left title-margin\" data-role=\"previous\"></span>
            <span class=\"pull-right glyphicon glyphicon-chevron-right title-margin disabled-next\" data-role=\"next\"></span>
            <div class=\"text-center title-month title-margin\" data-time=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y/m"), "html", null, true);
        echo "\" id=\"title-month\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y年m月"), "html", null, true);
        echo "
            </div>
          </div>
          
          <table class=\"sign_succ_table \">
            <thead align=\"center\">
              <tr class=\"sign_succ_canlerdar_head\">
                <td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td>
              </tr>
            </thead>
            <tbody align=\"center\" class=\"sign_succ_canlerdar_days j_canlerdar_days\">
            </tbody>
          </table>
        </div>
        <div class=\"sign_tip_boards\">
          <div class=\"mlm mtm\">
            <p class=\" text-muted\">签到排名：今日第<span class=\"today-rank\"></span>个签到</p>
          </div>
          <div class=\"mlm\">
            <p class=\" text-muted\">今日签到人数：<span class=\"signed-number\"></span></p>
          </div>
          <div class=\"mlm\">
            <p class=\" text-muted\">连续签到：<span class=\"keep-days\"></span>天</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:sign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  80 => 26,  74 => 23,  70 => 21,  62 => 15,  60 => 14,  57 => 13,  52 => 11,  45 => 10,  40 => 8,  32 => 6,  30 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default class-signin">*/
/*   <div class="panel-body">*/
/*     <div id="classroom-sign"  data-records="{{ path('classroom_signed_records', {'classroomId':classroom.id})}}" data-signurl="{{path('classroom_sign',{classroomId:classroom.id})}}" >*/
/*       <i class="es-icon es-icon-today"></i>*/
/*       {% if not isSignedToday %}*/
/*         <span class="date">{{ 'now' | date('m') }}月{{ 'now' | date('d') }}日</span>*/
/*         <!-- <br> -->*/
/*         <!-- 星期{{week}} -->*/
/*       {% else %}*/
/*         <span class="date">{{ 'now' | date('m') }}月{{ 'now' | date('d') }}日</span>*/
/*         <!-- <br>漏签<span style="color:red;">{{notSign}}</span>天 -->*/
/*       {% endif %}*/
/*       <div id="sign">*/
/*         {% if not isSignedToday %}*/
/*           <div class="sign-area"  data-role="sign">*/
/*             <a class="btn-signin" href="javascript:;">*/
/*               签到*/
/*             </a>*/
/*           </div>*/
/*         {% else %}*/
/*           <div class="sign-area" data-role="signed" onclick="return false;" >*/
/*             <a class="btn-signin after" >已签到*/
/*             <br>连续{{userSignStatistics.keepDays}}天</a>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="sign_main" style="display:none">*/
/*         <div class="">*/
/*           <div class="calendar_title_month clearfix">*/
/*             <span class="pull-left glyphicon glyphicon-chevron-left title-margin" data-role="previous"></span>*/
/*             <span class="pull-right glyphicon glyphicon-chevron-right title-margin disabled-next" data-role="next"></span>*/
/*             <div class="text-center title-month title-margin" data-time="{{ "now"|date('Y/m') }}" id="title-month">{{ "now"|date('Y年m月') }}*/
/*             </div>*/
/*           </div>*/
/*           */
/*           <table class="sign_succ_table ">*/
/*             <thead align="center">*/
/*               <tr class="sign_succ_canlerdar_head">*/
/*                 <td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody align="center" class="sign_succ_canlerdar_days j_canlerdar_days">*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*         <div class="sign_tip_boards">*/
/*           <div class="mlm mtm">*/
/*             <p class=" text-muted">签到排名：今日第<span class="today-rank"></span>个签到</p>*/
/*           </div>*/
/*           <div class="mlm">*/
/*             <p class=" text-muted">今日签到人数：<span class="signed-number"></span></p>*/
/*           </div>*/
/*           <div class="mlm">*/
/*             <p class=" text-muted">连续签到：<span class="keep-days"></span>天</p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/*   */
/* */
