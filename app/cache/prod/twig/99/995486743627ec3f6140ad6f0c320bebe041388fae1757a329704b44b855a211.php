<?php

/* TopxiaWebBundle:Course:announcement-block.html.twig */
class __TwigTemplate_8739b2e9bd06f1ddc41687d087f5049bcabfa8f13afcbc85a2149db1ce500add extends Twig_Template
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
        if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
            // line 2
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">
\t\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_add", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link btn-xs\"><i class=\"md md-add\"></i>添加公告</a>
\t\t</div>
\t\t<h3 class=\"panel-title\">课程公告</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"media-list announcement-list\">
\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 12
                echo "\t\t\t\t<li class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 15
                if ((isset($context["canTake"]) ? $context["canTake"] : null)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                    echo "\" >";
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\"
\t\t\t\t\t\t\t\t";
                    // line 19
                    if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false)) {
                        // line 20
                        echo "\t\t\t\t\t\t\t\thref=\"#modal\" 
\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\tdata-url=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 24
                        echo "\t\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t\t\t\t\t\t>";
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t<span class=\"pull-right text-muted text-sm\">";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "createdTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t<a class=\"text-muted text-sm mrm action\" href=\"javascript:;\" data-target=\"#modal\"  data-toggle=\"modal\" data-url=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> 修改</a>
\t\t\t\t\t\t\t\t<a class=\"text-muted text-sm action\" href=\"#\" data-role=\"delete\" data-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 36
                echo "<div class=\"empty\">暂无课程公告</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t</ul>
\t</div>
</div>\t

";
        } elseif (        // line 42
(isset($context["announcements"]) ? $context["announcements"] : null)) {
            // line 43
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">课程公告</h3>
\t</div>

\t<div class=\"panel-body\">
\t\t<ul class=\"media-list announcement-list\">
\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 51
                echo "\t\t\t\t<li class=\"media\">
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                // line 54
                if ((isset($context["canTake"]) ? $context["canTake"] : null)) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                    echo "\" >";
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t<a id=\"course-buy-btn\" 
\t\t\t\t\t\t\t\t";
                    // line 58
                    if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false)) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\thref=\"#modal\" 
\t\t\t\t\t\t\t\tdata-toggle=\"modal\" 
\t\t\t\t\t\t\t\tdata-url=\"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\" 
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 63
                        echo "\t\t\t\t\t\t\t\thref=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t\t\t\t>";
                    echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t</ul>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  172 => 67,  166 => 65,  160 => 63,  155 => 61,  151 => 59,  149 => 58,  146 => 57,  138 => 55,  136 => 54,  131 => 51,  127 => 50,  118 => 43,  116 => 42,  110 => 38,  103 => 36,  93 => 32,  89 => 31,  85 => 30,  81 => 28,  75 => 26,  69 => 24,  64 => 22,  60 => 20,  58 => 19,  55 => 18,  47 => 16,  45 => 15,  40 => 12,  35 => 11,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if canManage %}*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		<div class="pull-right">*/
/* 			<a href="#modal" data-toggle="modal" data-url="{{ path('course_announcement_add',{courseId:course.id}) }}" class="btn btn-link btn-xs"><i class="md md-add"></i>添加公告</a>*/
/* 		</div>*/
/* 		<h3 class="panel-title">课程公告</h3>*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<ul class="media-list announcement-list">*/
/* 			{% for announcement in announcements %}*/
/* 				<li class="media">*/
/* 					<div class="media-body">*/
/* 						<p>*/
/* 							{% if canTake %}*/
/* 								<a id="course-buy-btn" href="#modal" data-toggle="modal" data-url="{{ path('course_announcement_show', {courseId:course.id, id:announcement.id}) }}" >{{ announcement.content|plain_text(40)|default('<span class="text-warning">(请点击查看)</span>')|raw }}</a>*/
/* 							{% else %}*/
/* 								<a id="course-buy-btn"*/
/* 								{% if setting("course.buy_fill_userinfo")|default(false) %}*/
/* 								href="#modal" */
/* 								data-toggle="modal" */
/* 								data-url="{{ path('course_buy', {id:course.id, targetType:'course'}) }}"*/
/* 								{% else %}*/
/* 								href="{{ path('order_show', {targetId:course.id, targetType:'course'}) }}"*/
/* 								{% endif %}*/
/* 								>{{ announcement.content|plain_text(40)|default('<span class="text-warning">(请点击查看)</span>')|raw }}</a>*/
/* 							{% endif %}*/
/* 						</p>*/
/* 							<div class="clearfix">*/
/* 								<span class="pull-right text-muted text-sm">{{ announcement.createdTime|date('Y-m-d H:i') }}</span>*/
/* 								<a class="text-muted text-sm mrm action" href="javascript:;" data-target="#modal"  data-toggle="modal" data-url="{{ path('course_announcement_update',{courseId:course.id, id:announcement.id}) }}"><span class="glyphicon glyphicon-pencil"></span> 修改</a>*/
/* 								<a class="text-muted text-sm action" href="#" data-role="delete" data-url="{{ path('course_announcement_delete',{courseId:course.id, id:announcement.id}) }}"><span class="glyphicon glyphicon-trash"></span> 删除</a>*/
/* 							</div>*/
/* 					</div>*/
/* 				</li>*/
/* 			{% else %}<div class="empty">暂无课程公告</div>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* </div>	*/
/* */
/* {% elseif announcements %}*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		<h3 class="panel-title">课程公告</h3>*/
/* 	</div>*/
/* */
/* 	<div class="panel-body">*/
/* 		<ul class="media-list announcement-list">*/
/* 			{% for announcement in announcements %}*/
/* 				<li class="media">*/
/* 					<div class="media-body">*/
/* 						<p>*/
/* 							{% if canTake %}*/
/* 								<a id="course-buy-btn" href="#modal" data-toggle="modal" data-url="{{ path('course_announcement_show', {courseId:course.id, id:announcement.id}) }}" >{{ announcement.content|plain_text(40)|default('<span class="text-warning">(请点击查看)</span>')|raw }}</a>*/
/* 							{% else %}*/
/* 								<a id="course-buy-btn" */
/* 								{% if setting("course.buy_fill_userinfo")|default(false) %}*/
/* 								href="#modal" */
/* 								data-toggle="modal" */
/* 								data-url="{{ path('course_buy', {id:course.id, targetType:'course'}) }}" */
/* 								{% else %}*/
/* 								href="{{ path('order_show', {targetId:course.id, targetType:'course'}) }}"*/
/* 								{% endif %}*/
/* 								>{{ announcement.content|plain_text(40)|default('<span class="text-warning">(请点击查看)</span>')|raw }}</a>*/
/* 							{% endif %}*/
/* 						</p>*/
/* 					</div>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
