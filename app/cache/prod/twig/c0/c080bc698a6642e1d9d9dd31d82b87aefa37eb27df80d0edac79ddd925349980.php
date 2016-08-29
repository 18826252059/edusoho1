<?php

/* TopxiaAdminBundle:System:default-share-content.html.twig */
class __TwigTemplate_3b85443c6ab5ad5c6b17712069d37729c439dab0890fc233ba97065dadc5e254 extends Twig_Template
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
        echo "<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  <div >
    <fieldset>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"article_share_content\">资讯分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"articleShareContent\" class=\"form-control\" rows=\"5\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "articleShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 17
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{articletitle}} 为资讯标题</li>
              <li>{{sitename}} 为网校名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">课程分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"courseShareContent\" name=\"courseShareContent\" class=\"form-control\" rows=\"5\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "courseShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 34
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{course}} 为课程名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">小组分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"groupShareContent\" name=\"groupShareContent\" class=\"form-control\" rows=\"5\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "groupShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 52
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{groupname}} 为小组名称</li>
              <li>{{threadname}} 为话题名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"course_share_content\">班级分享内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"classroomShareContent\" name=\"classroomShareContent\" class=\"form-control\" rows=\"5\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "classroomShareContent", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 69
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{classroom}} 为班级名称</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>

    </fieldset>
  </div>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-share-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 81,  105 => 69,  100 => 62,  81 => 52,  76 => 44,  58 => 34,  53 => 27,  34 => 17,  29 => 9,  19 => 1,);
    }
}
/* <form class="form-horizontal" id="cloud-setting-form" method="post" novalidate>*/
/*   <div >*/
/*     <fieldset>*/
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="article_share_content">资讯分享内容</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <textarea id="courseShareContent" name="articleShareContent" class="form-control" rows="5">{{ defaultSetting.articleShareContent }}</textarea>*/
/*           <div class="help-block">*/
/*             {% verbatim %}*/
/*             <div>变量说明：</div>*/
/*             <ul>*/
/*               <li>{{articletitle}} 为资讯标题</li>*/
/*               <li>{{sitename}} 为网校名称</li>*/
/*             </ul>*/
/*             {% endverbatim %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="course_share_content">课程分享内容</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <textarea id="courseShareContent" name="courseShareContent" class="form-control" rows="5">{{ defaultSetting.courseShareContent }}</textarea>*/
/*           <div class="help-block">*/
/*             {% verbatim %}*/
/*             <div>变量说明：</div>*/
/*             <ul>*/
/*               <li>{{course}} 为课程名称</li>*/
/*             </ul>*/
/*             {% endverbatim %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="course_share_content">小组分享内容</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <textarea id="groupShareContent" name="groupShareContent" class="form-control" rows="5">{{ defaultSetting.groupShareContent }}</textarea>*/
/*           <div class="help-block">*/
/*             {% verbatim %}*/
/*             <div>变量说明：</div>*/
/*             <ul>*/
/*               <li>{{groupname}} 为小组名称</li>*/
/*               <li>{{threadname}} 为话题名称</li>*/
/*             </ul>*/
/*             {% endverbatim %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="course_share_content">班级分享内容</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <textarea id="classroomShareContent" name="classroomShareContent" class="form-control" rows="5">{{ defaultSetting.classroomShareContent }}</textarea>*/
/*           <div class="help-block">*/
/*             {% verbatim %}*/
/*             <div>变量说明：</div>*/
/*             <ul>*/
/*               <li>{{classroom}} 为班级名称</li>*/
/*             </ul>*/
/*             {% endverbatim %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </fieldset>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-3 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
