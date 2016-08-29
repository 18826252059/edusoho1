<?php

/* TopxiaWebBundle:Group:groups-threads-posts-ul.html.twig */
class __TwigTemplate_741d10b82ae84830c9f12a15f74224918e4174f71c9523e8090a648c734f5ca5 extends Twig_Template
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
        echo "<ul class=\"media-list message-list\">
  ";
        // line 2
        if ((isset($context["postThreads"]) ? $context["postThreads"] : null)) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["postThreads"]) ? $context["postThreads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["postThread"]) {
                // line 4
                echo "    
            <li class=\"media\" style=\"word-break: break-all;\">
              <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/reply.gif"), "html", null, true);
                echo "\" > ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "link-muted"), "method"), "html", null, true);
                echo "回复了话题 <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["groupsAsPostThreads"]) ? $context["groupsAsPostThreads"] : null), $this->getAttribute($this->getAttribute((isset($context["threads"]) ? $context["threads"] : null), $this->getAttribute($context["postThread"], "threadId", array()), array(), "array"), "groupId", array()), array(), "array"), "id", array()), "threadId" => $this->getAttribute($context["postThread"], "threadId", array()))), "html", null, true);
                echo "\" >\"";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["threads"]) ? $context["threads"] : null), $this->getAttribute($context["postThread"], "threadId", array()), array(), "array"), "title", array()), 40);
                echo "\"</a>
              &nbsp;
              <div class=\"media-body \" >
                
                <div class=\"popover right clearfix\" >
                  <div class=\"popover-content\">    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["groupsAsPostThreads"]) ? $context["groupsAsPostThreads"] : null), $this->getAttribute($this->getAttribute((isset($context["threads"]) ? $context["threads"] : null), $this->getAttribute($context["postThread"], "threadId", array()), array(), "array"), "groupId", array()), array(), "array"), "id", array()), "threadId" => $this->getAttribute($context["postThread"], "threadId", array()))), "html", null, true);
                echo "?post=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["postThread"], "id", array()), "html", null, true);
                echo "\" class=\"col-md-offset-1\">\"";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["postThread"], "content", array()), 30);
                echo "\"</a> 
                    <div class=\"pull-right\">
                    <a class=\"link-muted\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["groupsAsPostThreads"]) ? $context["groupsAsPostThreads"] : null), $this->getAttribute($this->getAttribute((isset($context["threads"]) ? $context["threads"] : null), $this->getAttribute($context["postThread"], "threadId", array()), array(), "array"), "groupId", array()), array(), "array"), "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groupsAsPostThreads"]) ? $context["groupsAsPostThreads"] : null), $this->getAttribute($this->getAttribute((isset($context["threads"]) ? $context["threads"] : null), $this->getAttribute($context["postThread"], "threadId", array()), array(), "array"), "groupId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groupsAsPostThreads"]) ? $context["groupsAsPostThreads"] : null), $this->getAttribute($this->getAttribute((isset($context["threads"]) ? $context["threads"] : null), $this->getAttribute($context["postThread"], "threadId", array()), array(), "array"), "groupId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</a>&nbsp; ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["postThread"], "createdTime", array())), "html", null, true);
                echo "
                    </div>
                  </div>
                </div>
              </div>

            </li>
          
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postThread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
  ";
        } else {
            // line 24
            echo "    <div class=\"empty\">暂无回复！</div>
  ";
        }
        // line 26
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-threads-posts-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  81 => 24,  77 => 22,  56 => 13,  47 => 11,  33 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="media-list message-list">*/
/*   {% if postThreads%}*/
/*     {% for postThread in postThreads%}*/
/*     */
/*             <li class="media" style="word-break: break-all;">*/
/*               <img src="{{asset('assets/img/default/reply.gif')}}" > {{ web_macro.user_link(user , 'link-muted') }}回复了话题 <a  href="{{path('group_thread_show',{id:groupsAsPostThreads[threads[postThread.threadId].groupId].id,threadId:postThread.threadId})}}" >"{{threads[postThread.threadId].title|sub_text(40)}}"</a>*/
/*               &nbsp;*/
/*               <div class="media-body " >*/
/*                 */
/*                 <div class="popover right clearfix" >*/
/*                   <div class="popover-content">    <a href="{{path('group_thread_show',{id:groupsAsPostThreads[threads[postThread.threadId].groupId].id,threadId:postThread.threadId})}}?post={{postThread.id}}" class="col-md-offset-1">"{{postThread.content|sub_text(30)}}"</a> */
/*                     <div class="pull-right">*/
/*                     <a class="link-muted" href="{{path('group_show',{id:groupsAsPostThreads[threads[postThread.threadId].groupId].id})}}" title="{{groupsAsPostThreads[threads[postThread.threadId].groupId].title}}" >{{groupsAsPostThreads[threads[postThread.threadId].groupId].title}}</a>&nbsp; {{postThread.createdTime|smart_time}}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*             </li>*/
/*           */
/*     {% endfor %}*/
/* */
/*   {% else %}*/
/*     <div class="empty">暂无回复！</div>*/
/*   {% endif %}*/
/* </ul>*/
