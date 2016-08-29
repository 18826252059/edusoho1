<?php

/* TopxiaAdminBundle:EduCloud:cloud-search-clause-modal.html.twig */
class __TwigTemplate_4e019e7287cc720e5714da4052191f602e876f0c72986cdf9c775874610dda11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:EduCloud:cloud-search-clause-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "云搜索条款";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <form id=\"search-clause-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_search_clause");
        echo "\">
    <div class=\"item\">
      <h3 class=\"text-center\">EduSoho云搜索服务使用条款</h3>
      <p>本服务条款作为《EduSoho开放云服务条款》的补充条款，是EduSoho开放云平台（open.edusoho.com）的经营者杭州阔知网络科技有限公司（以下简称为“阔知网络”），与用户（下称为“您”），共同缔结的对双方具有约束力的有效契约。
      EduSoho云搜索服务（下简称“云搜索服务”、“本服务”）由EduSoho开放云提供，并将不断更新服务内容。</p>
      <h5>1.总则</h5>
      <p>1.1您确认：您在使用本服务之前，已经充分阅读、理解并接受本服务条款的全部内容（特别是以加粗及/或下划线标注的内容），一旦您选择“同意”并开通、使用本服务，即表示您同意遵循本服务条款之所有约定。</p>
      <p>1.2您同意：EduSoho开放云有权随时对本服务条款及相应的服务规则内容进行单方面的变更，并有权以消息推送、网页公告等方式予以公布，而无需另行单独通知您；若您在本服务条款内容公告变更后继续使用本服务的，表示您已充分阅读、理解并接受修改后的协议内容，也将遵循修改后的条款内容使用本服务；若您不同意修改后的服务条款，您应立即停止使用本服务。</p>
      <h5>2.服务内容</h5>
      <p>2.1本服务为您的EduSoho网校提供以下内容的搜索功能：</p>
      <p>（一）课程相关信息；</p>
      <p>（二）老师相关信息；</p>
      <p>（三）小组话题和班级话题相关信息；</p>
      <p>（四）网校资讯相关信息。</p>
      <p>您的学员可以通过本服务在您的EduSoho网校内搜索上述四类信息。</p>
      <h5>3.您的权利和义务</h5>
      <p>3.1您理解并同意，EduSoho开放云收集您网校内以下信息：</p>
      <p>（一）课程相关信息（包括：课程标题、课程副标题、课程简介、适合人群、课程目标、课时标题、课时摘要等信息）；</p>
      <p>（二）老师相关信息（包括：老师昵称、老师简介等信息）； </p>
      <p>（三）小组话题和班级话题相关信息（包括：话题标题、话题内容、话题发布时间等信息）；</p>
      <p>（四）网校资讯相关信息（包括：资讯标题、资讯内容、资讯发布时间等信息）。</p>
      <p>上述四类信息仅用于为您的EduSoho网校提供搜索服务。</p>
      <h5>4.EduSoho开放云的权利和义务</h5>
      <p>4.1EduSoho开放云承诺对您网校的课程相关信息、老师相关信息、小组话题和班级话题相关、资讯相关信息采取对外保密措施，不向第三方披露这些信息，不授权第三方使用这些信息，除非：</p>
      <p>4.1.1依据本服务条款或者您与EduSoho开放云之间其他服务协议、合同、在线条款等规定可以提供；</p>
      <p>4.1.2依据法律法规的规定应当提供；</p>
      <p>4.1.3行政、司法等职权部门要求EduSoho开放云提供；</p>
      <p>4.1.4您同意EduSoho开放云向第三方提供；</p>
      <p>4.1.5EduSoho开放云解决举报事件、提起诉讼而提交的；</p>
      <p>4.1.6EduSoho开放云为防止严重违法行为或涉嫌犯罪行为发生而采取必要合理行动所必须提交的；</p>
      <p>4.1.7EduSoho开放云为向您提供产品、服务、信息而向第三方提供的，包括EduSoho开放云通过第三方的技术及服务向您提供产品、服务、信息的情况。</p>
      <h5>5.责任范围及责任限制</h5>
      <p>5.1EduSoho开放云对本服务条款中列明的责任承担范围负责。</p>
      <h5>6.完整协议</h5>
      <p>6.1本服务条款作为《EduSoho开放云服务条款》的补充条款，除另外说明，相关名词与《EduSoho开放云服务条款》的定义相同。</p>
      <p>6.2一旦您同意本服务条款或使用本服务，本服务条款即成为《EduSoho开放云服务条款》不可分割的组成部分，与《EduSoho开放云服务条款》具有同等的法律效力。</p>
      <p>6.3除本服务条款中明确所作修改的条款之外，《EduSoho开放云服务条款》中的其余部分应完全继续有效。</p>
      <p>6.4本服务条款与《EduSoho开放云服务条款》有相互冲突时，以本服务条款为准。</p>
      <p>6.5本服务条款的章节标题仅为行文方便而设，不具有法律或合同效力。</p>
      <p>6.6您对本服务条款理解和认同，您即对本服务条款所有组成部分的内容理解并认同，一旦您使用本服务，您和EduSoho开放云即受本服务条款所有组成部分的约束。</p>
      <p>6.7本服务条款部分内容被有管辖权的法院认定为违法的，不因此影响其他内容的效力。</p>
      <h5>7.法律适用与管辖</h5>
      <p>本服务条款之效力、解释、变更、执行与争议解决均适用中华人民共和国法律。因本服务条款产生之争议，均应依照中华人民共和国法律予以处理，并提交浙江省杭州市滨江区人民法院仲裁。</p>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "  <button id=\"search-clause-form\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#search-clause-form\">同意</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-search-clause-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 58,  98 => 57,  91 => 53,  42 => 8,  39 => 7,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}云搜索条款{% endblock %}*/
/* */
/* {% block body %}*/
/*   <form id="search-clause-form" class="form-horizontal" method="post" action="{{ path('admin_edu_cloud_search_clause') }}">*/
/*     <div class="item">*/
/*       <h3 class="text-center">EduSoho云搜索服务使用条款</h3>*/
/*       <p>本服务条款作为《EduSoho开放云服务条款》的补充条款，是EduSoho开放云平台（open.edusoho.com）的经营者杭州阔知网络科技有限公司（以下简称为“阔知网络”），与用户（下称为“您”），共同缔结的对双方具有约束力的有效契约。*/
/*       EduSoho云搜索服务（下简称“云搜索服务”、“本服务”）由EduSoho开放云提供，并将不断更新服务内容。</p>*/
/*       <h5>1.总则</h5>*/
/*       <p>1.1您确认：您在使用本服务之前，已经充分阅读、理解并接受本服务条款的全部内容（特别是以加粗及/或下划线标注的内容），一旦您选择“同意”并开通、使用本服务，即表示您同意遵循本服务条款之所有约定。</p>*/
/*       <p>1.2您同意：EduSoho开放云有权随时对本服务条款及相应的服务规则内容进行单方面的变更，并有权以消息推送、网页公告等方式予以公布，而无需另行单独通知您；若您在本服务条款内容公告变更后继续使用本服务的，表示您已充分阅读、理解并接受修改后的协议内容，也将遵循修改后的条款内容使用本服务；若您不同意修改后的服务条款，您应立即停止使用本服务。</p>*/
/*       <h5>2.服务内容</h5>*/
/*       <p>2.1本服务为您的EduSoho网校提供以下内容的搜索功能：</p>*/
/*       <p>（一）课程相关信息；</p>*/
/*       <p>（二）老师相关信息；</p>*/
/*       <p>（三）小组话题和班级话题相关信息；</p>*/
/*       <p>（四）网校资讯相关信息。</p>*/
/*       <p>您的学员可以通过本服务在您的EduSoho网校内搜索上述四类信息。</p>*/
/*       <h5>3.您的权利和义务</h5>*/
/*       <p>3.1您理解并同意，EduSoho开放云收集您网校内以下信息：</p>*/
/*       <p>（一）课程相关信息（包括：课程标题、课程副标题、课程简介、适合人群、课程目标、课时标题、课时摘要等信息）；</p>*/
/*       <p>（二）老师相关信息（包括：老师昵称、老师简介等信息）； </p>*/
/*       <p>（三）小组话题和班级话题相关信息（包括：话题标题、话题内容、话题发布时间等信息）；</p>*/
/*       <p>（四）网校资讯相关信息（包括：资讯标题、资讯内容、资讯发布时间等信息）。</p>*/
/*       <p>上述四类信息仅用于为您的EduSoho网校提供搜索服务。</p>*/
/*       <h5>4.EduSoho开放云的权利和义务</h5>*/
/*       <p>4.1EduSoho开放云承诺对您网校的课程相关信息、老师相关信息、小组话题和班级话题相关、资讯相关信息采取对外保密措施，不向第三方披露这些信息，不授权第三方使用这些信息，除非：</p>*/
/*       <p>4.1.1依据本服务条款或者您与EduSoho开放云之间其他服务协议、合同、在线条款等规定可以提供；</p>*/
/*       <p>4.1.2依据法律法规的规定应当提供；</p>*/
/*       <p>4.1.3行政、司法等职权部门要求EduSoho开放云提供；</p>*/
/*       <p>4.1.4您同意EduSoho开放云向第三方提供；</p>*/
/*       <p>4.1.5EduSoho开放云解决举报事件、提起诉讼而提交的；</p>*/
/*       <p>4.1.6EduSoho开放云为防止严重违法行为或涉嫌犯罪行为发生而采取必要合理行动所必须提交的；</p>*/
/*       <p>4.1.7EduSoho开放云为向您提供产品、服务、信息而向第三方提供的，包括EduSoho开放云通过第三方的技术及服务向您提供产品、服务、信息的情况。</p>*/
/*       <h5>5.责任范围及责任限制</h5>*/
/*       <p>5.1EduSoho开放云对本服务条款中列明的责任承担范围负责。</p>*/
/*       <h5>6.完整协议</h5>*/
/*       <p>6.1本服务条款作为《EduSoho开放云服务条款》的补充条款，除另外说明，相关名词与《EduSoho开放云服务条款》的定义相同。</p>*/
/*       <p>6.2一旦您同意本服务条款或使用本服务，本服务条款即成为《EduSoho开放云服务条款》不可分割的组成部分，与《EduSoho开放云服务条款》具有同等的法律效力。</p>*/
/*       <p>6.3除本服务条款中明确所作修改的条款之外，《EduSoho开放云服务条款》中的其余部分应完全继续有效。</p>*/
/*       <p>6.4本服务条款与《EduSoho开放云服务条款》有相互冲突时，以本服务条款为准。</p>*/
/*       <p>6.5本服务条款的章节标题仅为行文方便而设，不具有法律或合同效力。</p>*/
/*       <p>6.6您对本服务条款理解和认同，您即对本服务条款所有组成部分的内容理解并认同，一旦您使用本服务，您和EduSoho开放云即受本服务条款所有组成部分的约束。</p>*/
/*       <p>6.7本服务条款部分内容被有管辖权的法院认定为违法的，不因此影响其他内容的效力。</p>*/
/*       <h5>7.法律适用与管辖</h5>*/
/*       <p>本服务条款之效力、解释、变更、执行与争议解决均适用中华人民共和国法律。因本服务条款产生之争议，均应依照中华人民共和国法律予以处理，并提交浙江省杭州市滨江区人民法院仲裁。</p>*/
/*     </div>*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="search-clause-form" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#search-clause-form">同意</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
