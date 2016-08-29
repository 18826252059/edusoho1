<?php

/* TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig */
class __TwigTemplate_c4bfaa682c5385a86e628a042e9804c9770f4f41dc7dcfa56f985d7fcfb1d98c extends Twig_Template
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
<table class=\"table table-condensed table-bordered table-striped table-hover\">
        <thead>
          <tr>
            <th width=\"35%\"></th>
            <th width=\"20%\">今日</th>
            <th width=\"20%\" >昨日</th>
\t\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 9
            echo "            <th width=\"40%\">历史</th>
\t\t";
        }
        // line 11
        echo "          </tr>
        </thead>
        <tbody>
\t\t\t<tr>
\t\t\t\t<td>新注册用户数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["todayRegisterNum"]) ? $context["todayRegisterNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["yesterdayRegisterNum"]) ? $context["yesterdayRegisterNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "detail", "analysisDateType" => "register")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>用户登录数<small>（不含重复登录）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["todayLoginNum"]) ? $context["todayLoginNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["yesterdayLoginNum"]) ? $context["yesterdayLoginNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 28
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "trend", "analysisDateType" => "login")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "detail", "analysisDateType" => "login")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 29
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课程数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["todayCourseNum"]) ? $context["todayCourseNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["yesterdayCourseNum"]) ? $context["yesterdayCourseNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 37
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "trend", "analysisDateType" => "course")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "detail", "analysisDateType" => "course")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 38
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>新增课时数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["todayLessonNum"]) ? $context["todayLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["yesterdayLessonNum"]) ? $context["yesterdayLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 46
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "trend", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "detail", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 47
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>加入学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["todayJoinLessonNum"]) ? $context["todayJoinLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["yesterdayJoinLessonNum"]) ? $context["yesterdayJoinLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 55
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "trend", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "detail", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t";
        }
        // line 56
        echo "\t
\t\t\t</tr>

\t\t\t";
        // line 60
        echo "\t\t\t\t";
        // line 61
        echo "\t\t\t\t";
        // line 62
        echo "\t\t\t\t";
        // line 63
        echo "\t\t\t";
        // line 64
        echo "\t\t\t\t";
        // line 65
        echo "\t\t\t";
        // line 66
        echo "\t\t\t";
        // line 67
        echo "
\t\t\t";
        // line 69
        echo "\t\t\t\t";
        // line 70
        echo "\t\t\t\t";
        // line 71
        echo "\t\t\t\t";
        // line 72
        echo "\t\t\t";
        // line 73
        echo "\t\t\t\t";
        // line 74
        echo "\t\t\t";
        // line 75
        echo "\t\t\t";
        // line 76
        echo "
\t\t\t<tr>
\t\t\t\t<td>完成课时学习数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["todayFinishedLessonNum"]) ? $context["todayFinishedLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedLessonNum"]) ? $context["yesterdayFinishedLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 81
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 82
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "trend", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "detail", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">详情</a></td>
\t\t";
        }
        // line 83
        echo "\t
\t\t\t</tr>

\t\t\t";
        // line 87
        echo "\t\t\t\t";
        // line 88
        echo "\t\t\t\t";
        // line 89
        echo "\t\t\t\t";
        // line 90
        echo "\t\t";
        // line 91
        echo "\t\t\t\t";
        // line 92
        echo "\t\t";
        // line 93
        echo "\t\t\t";
        // line 94
        echo "
\t\t\t";
        // line 96
        echo "\t\t\t\t";
        // line 97
        echo "\t\t\t\t";
        // line 98
        echo "\t\t\t\t";
        // line 99
        echo "\t\t";
        // line 100
        echo "\t\t\t\t";
        // line 101
        echo "\t\t\t\t";
        // line 102
        echo "\t\t\t\t\t\t";
        // line 103
        echo "\t\t\t\t\t";
        // line 104
        echo "\t\t\t\t\t\t";
        // line 105
        echo "\t\t\t\t";
        // line 106
        echo "\t\t\t\t";
        // line 107
        echo "\t\t";
        // line 108
        echo "\t\t\t";
        // line 109
        echo "
\t\t\t";
        // line 111
        echo "\t\t\t\t";
        // line 112
        echo "\t\t\t\t";
        // line 113
        echo "\t\t\t\t";
        // line 114
        echo "\t\t";
        // line 115
        echo "\t\t\t\t";
        // line 116
        echo "\t\t";
        // line 117
        echo "\t\t\t";
        // line 118
        echo "
\t\t\t";
        // line 120
        echo "\t\t\t\t";
        // line 121
        echo "\t\t\t\t";
        // line 122
        echo "\t\t\t\t";
        // line 123
        echo "\t\t\t";
        // line 124
        echo "\t\t\t\t";
        // line 125
        echo "\t\t\t";
        // line 126
        echo "\t\t\t";
        // line 127
        echo "\t\t\t";
        // line 128
        echo "\t\t\t";
        // line 129
        echo "\t\t\t\t";
        // line 130
        echo "\t\t\t\t";
        // line 131
        echo "\t\t\t\t";
        // line 132
        echo "\t\t\t\t";
        // line 133
        echo "\t\t\t";
        // line 134
        echo "
\t\t\t";
        // line 136
        echo "\t\t\t\t";
        // line 137
        echo "\t\t\t\t";
        // line 138
        echo "\t\t\t\t";
        // line 139
        echo "\t\t\t\t";
        // line 140
        echo "\t\t\t";
        // line 141
        echo "
\t\t\t";
        // line 143
        echo "\t\t\t\t";
        // line 144
        echo "\t\t\t\t";
        // line 145
        echo "\t\t\t\t";
        // line 146
        echo "\t\t\t\t";
        // line 147
        echo "\t\t\t";
        // line 148
        echo "
\t\t\t";
        // line 150
        echo "\t\t\t\t";
        // line 151
        echo "\t\t\t\t";
        // line 152
        echo "\t\t\t\t";
        // line 153
        echo "\t\t\t\t";
        // line 154
        echo "\t\t\t";
        // line 155
        echo "\t\t\t";
        // line 156
        echo "\t\t\t<tr>
\t\t\t\t<td>课程总数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["todayCourseSum"]) ? $context["todayCourseSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["yesterdayCourseSum"]) ? $context["yesterdayCourseSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 160
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 161
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "trend", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "detail", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 163
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>用户总数</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["todayUserSum"]) ? $context["todayUserSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["yesterdayUserSum"]) ? $context["yesterdayUserSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 169
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 170
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "trend", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">趋势</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "detail", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">详情</a></td>
\t\t\t\t";
        }
        // line 172
        echo "\t\t\t</tr>
";
        // line 179
        echo "

        </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 179,  400 => 172,  392 => 170,  390 => 169,  386 => 168,  382 => 167,  376 => 163,  368 => 161,  366 => 160,  362 => 159,  358 => 158,  354 => 156,  352 => 155,  350 => 154,  348 => 153,  346 => 152,  344 => 151,  342 => 150,  339 => 148,  337 => 147,  335 => 146,  333 => 145,  331 => 144,  329 => 143,  326 => 141,  324 => 140,  322 => 139,  320 => 138,  318 => 137,  316 => 136,  313 => 134,  311 => 133,  309 => 132,  307 => 131,  305 => 130,  303 => 129,  301 => 128,  299 => 127,  297 => 126,  295 => 125,  293 => 124,  291 => 123,  289 => 122,  287 => 121,  285 => 120,  282 => 118,  280 => 117,  278 => 116,  276 => 115,  274 => 114,  272 => 113,  270 => 112,  268 => 111,  265 => 109,  263 => 108,  261 => 107,  259 => 106,  257 => 105,  255 => 104,  253 => 103,  251 => 102,  249 => 101,  247 => 100,  245 => 99,  243 => 98,  241 => 97,  239 => 96,  236 => 94,  234 => 93,  232 => 92,  230 => 91,  228 => 90,  226 => 89,  224 => 88,  222 => 87,  217 => 83,  209 => 82,  207 => 81,  203 => 80,  199 => 79,  194 => 76,  192 => 75,  190 => 74,  188 => 73,  186 => 72,  184 => 71,  182 => 70,  180 => 69,  177 => 67,  175 => 66,  173 => 65,  171 => 64,  169 => 63,  167 => 62,  165 => 61,  163 => 60,  158 => 56,  150 => 55,  148 => 54,  144 => 53,  140 => 52,  133 => 47,  125 => 46,  123 => 45,  119 => 44,  115 => 43,  108 => 38,  100 => 37,  98 => 36,  94 => 35,  90 => 34,  83 => 29,  75 => 28,  73 => 27,  69 => 26,  65 => 25,  59 => 21,  51 => 19,  49 => 18,  45 => 17,  41 => 16,  34 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* */
/* <table class="table table-condensed table-bordered table-striped table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <th width="35%"></th>*/
/*             <th width="20%">今日</th>*/
/*             <th width="20%" >昨日</th>*/
/* 		{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*             <th width="40%">历史</th>*/
/* 		{% endif %}*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			<tr>*/
/* 				<td>新注册用户数</td>*/
/* 				<td><span class="pull-right">{{todayRegisterNum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayRegisterNum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_register',{tab:"trend",analysisDateType:'register'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_register',{tab:"detail",analysisDateType:'register'})}}">详情</a></td>*/
/* 				{% endif %}*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 				<td>用户登录数<small>（不含重复登录）</small></td>*/
/* 				<td><span class="pull-right">{{todayLoginNum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayLoginNum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_login',{tab:"trend",analysisDateType:'login'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_login',{tab:"detail",analysisDateType:'login'})}}">详情</a></td>*/
/* 			{% endif %}	*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 				<td>新增课程数</td>*/
/* 				<td><span class="pull-right">{{todayCourseNum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayCourseNum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_course',{tab:"trend",analysisDateType:'course'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_course',{tab:"detail",analysisDateType:'course'})}}">详情</a></td>*/
/* 			{% endif %}	*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 				<td>新增课时数</td>*/
/* 				<td><span class="pull-right">{{todayLessonNum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayLessonNum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_lesson',{tab:"trend",analysisDateType:'lesson'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_lesson',{tab:"detail",analysisDateType:'lesson'})}}">详情</a></td>*/
/* 			{% endif %}	*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 				<td>加入学习数</td>*/
/* 				<td><span class="pull-right">{{todayJoinLessonNum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayJoinLessonNum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_lesson_join',{tab:"trend",analysisDateType:'joinLesson'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_lesson_join',{tab:"detail",analysisDateType:'joinLesson'})}}">详情</a></td>*/
/* 			{% endif %}	*/
/* 			</tr>*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>购买课程数</td>#}*/
/* 				{#<td><span class="pull-right">{{todayBuyLessonNum}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayBuyLessonNum}}</span></td>#}*/
/* 			{#{% if is_granted('ROLE_SUPER_ADMIN') %}#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_lesson_paid',{tab:"trend",analysisDateType:'paidLesson'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_lesson_paid',{tab:"detail",analysisDateType:'paidLesson'})}}">详情</a></td>#}*/
/* 			{#{% endif %}	#}*/
/* 			{#</tr>#}*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>购买班级数</td>#}*/
/* 				{#<td><span class="pull-right">{{todayBuyClassroomNum}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayBuyClassroomNum}}</span></td>#}*/
/* 			{#{% if is_granted('ROLE_SUPER_ADMIN') %}#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_classroom_paid',{tab:"trend",analysisDateType:'paidClassroom'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_classroom_paid',{tab:"detail",analysisDateType:'paidClassroom'})}}">详情</a></td>#}*/
/* 			{#{% endif %}	#}*/
/* 			{#</tr>#}*/
/* */
/* 			<tr>*/
/* 				<td>完成课时学习数</td>*/
/* 				<td><span class="pull-right">{{todayFinishedLessonNum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayFinishedLessonNum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_lesson_finished',{tab:"trend",analysisDateType:'finishedLesson'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_lesson_finished',{tab:"detail",analysisDateType:'finishedLesson'})}}">详情</a></td>*/
/* 		{% endif %}	*/
/* 			</tr>*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>视频观看数<small>（含重复打开）</small></td>#}*/
/* 				{#<td><span class="pull-right">{{todayAllVideoViewedNum}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayAllVideoViewedNum}}</span></td>#}*/
/* 		{#{% if is_granted('ROLE_SUPER_ADMIN') %}#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_video_viewed',{tab:"trend",analysisDateType:'videoViewed'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_video_viewed',{tab:"detail",analysisDateType:'videoViewed'})}}">详情</a></td>#}*/
/* 		{#{% endif %}	#}*/
/* 			{#</tr>#}*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>└─ 云视频观看数</td>#}*/
/* 				{#<td><span class="pull-right">{{todayCloudVideoViewedNum}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayCloudVideoViewedNum}}</span></td>#}*/
/* 		{#{% if is_granted('ROLE_SUPER_ADMIN') %}#}*/
/* 				{#<td>#}*/
/* 				{#{% if keyCheckResult.error|default(null) == 'error' %}#}*/
/* 						{#未开通或未开启云视频!#}*/
/* 					{#{% else %}#}*/
/* 						{#<a href="{{path('admin_operation_analysis_video_cloud_viewed',{tab:"trend",analysisDateType:'cloudVideoViewed'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_video_cloud_viewed',{tab:"detail",analysisDateType:'cloudVideoViewed'})}}">详情</a>#}*/
/* 				{#{% endif %}#}*/
/* 				{#</td>#}*/
/* 		{#{% endif %}	#}*/
/* 			{#</tr>#}*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>└─ 本地视频观看数</td>#}*/
/* 				{#<td><span class="pull-right">{{todayLocalVideoViewedNum}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayLocalVideoViewedNum}}</span></td>#}*/
/* 		{#{% if is_granted('ROLE_SUPER_ADMIN') %}#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_video_local_viewed',{tab:"trend",analysisDateType:'localVideoViewed'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_video_local_viewed',{tab:"detail",analysisDateType:'localVideoViewed'})}}">详情</a></td>#}*/
/* 		{#{% endif %}	#}*/
/* 			{#</tr>#}*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>└─ 网络视频观看数</td>#}*/
/* 				{#<td><span class="pull-right">{{todayNetVideoViewedNum}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayNetVideoViewedNum}}</span></td>#}*/
/* 			{#{% if is_granted('ROLE_SUPER_ADMIN') %}#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_video_net_viewed',{tab:"trend",analysisDateType:'netVideoViewed'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_video_net_viewed',{tab:"detail",analysisDateType:'netVideoViewed'})}}">详情</a></td>#}*/
/* 			{#{% endif %}	#}*/
/* 			{#</tr>#}*/
/* 			{#{% if is_granted('ROLE_SUPER_ADMIN') %}#}*/
/* 			{#<tr>#}*/
/* 				{#<td>营收额</td>#}*/
/* 				{#<td><span class="pull-right">{{todayIncome}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayIncome}}</span></td>#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_income',{tab:"trend",analysisDateType:'income'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_income',{tab:"detail",analysisDateType:'income'})}}">详情</a></td>#}*/
/* 			{#</tr>#}*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>└─ 课程营收额</td>#}*/
/* 				{#<td><span class="pull-right">{{todayCourseIncome}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayCourseIncome}}</span></td>#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_course_income',{tab:"trend",analysisDateType:'courseIncome'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_course_income',{tab:"detail",analysisDateType:'courseIncome'})}}">详情</a></td>#}*/
/* 			{#</tr>#}*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>└─ 班级营收额</td>#}*/
/* 				{#<td><span class="pull-right">{{todayClassroomIncome}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayClassroomIncome}}</span></td>#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_classroom_income',{tab:"trend",analysisDateType:'classroomIncome'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_classroom_income',{tab:"detail",analysisDateType:'classroomIncome'})}}">详情</a></td>#}*/
/* 			{#</tr>#}*/
/* */
/* 			{#<tr>#}*/
/* 				{#<td>└─ 会员营收额</td>#}*/
/* 				{#<td><span class="pull-right">{{todayVipIncome}}</span></td>#}*/
/* 				{#<td><span class="pull-right">{{yesterdayVipIncome}}</span></td>#}*/
/* 				{#<td><a href="{{path('admin_operation_analysis_vip_income',{tab:"trend",analysisDateType:'vipIncome'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_vip_income',{tab:"detail",analysisDateType:'vipIncome'})}}">详情</a></td>#}*/
/* 			{#</tr>#}*/
/* 			{#{% endif %}#}*/
/* 			<tr>*/
/* 				<td>课程总数</td>*/
/* 				<td><span class="pull-right">{{todayCourseSum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayCourseSum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_course_sum',{tab:"trend",analysisDateType:'courseSum'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_course_sum',{tab:"detail",analysisDateType:'courseSum'})}}">详情</a></td>*/
/* 				{% endif %}*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 				<td>用户总数</td>*/
/* 				<td><span class="pull-right">{{todayUserSum}}</span></td>*/
/* 				<td><span class="pull-right">{{yesterdayUserSum}}</span></td>*/
/* 			{% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* 				<td><a href="{{path('admin_operation_analysis_user_sum',{tab:"trend",analysisDateType:'userSum'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_user_sum',{tab:"detail",analysisDateType:'userSum'})}}">详情</a></td>*/
/* 				{% endif %}*/
/* 			</tr>*/
/* {# 			<tr>*/
/* 				<td>退出学习数</td>*/
/* 				<td>{{todayExitLessonNum}}</td>*/
/* 				<td>{{yesterdayExitLessonNum}}</td>*/
/* 				<td><a href="{{path('admin_operation_analysis_lesson_exit',{tab:"trend",analysisDateType:'exitLesson'})}}">趋势</a> <span class="text-muted">|</span> <a href="{{path('admin_operation_analysis_lesson_exit',{tab:"detail",analysisDateType:'exitLesson'})}}">详情</a></td>*/
/* 			</tr> #}*/
/* */
/* */
/*         </tbody>*/
/* </table>*/
/* */
