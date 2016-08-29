<?php

/* TopxiaAdminBundle:EduCloud:cloud-search-setting.html.twig */
class __TwigTemplate_757e7818b9240e70b7da4c8bca2a156a91cd7f6c164f7a3f3f14d561f4c23b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:cloud-search-setting.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_edu_cloud_search";
        // line 4
        $context["script_controller"] = "setting/cloud";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>

    ";
        // line 12
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status", array()) == "unlink")) {
            // line 13
            echo "      <div class=\"text-center\">
        <h1 class=\"text-muted\">网络问题，无法连接";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
            echo "开放云平台</h1>
      </div>
    ";
        } else {
            // line 17
            echo "      <div class=\"row form-group\">
        ";
            // line 18
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "status", array()) == "unconnect")) {
                // line 19
                echo "          <div class=\"col-md-2 control-cloud\">
            <a class=\"btn btn-primary mhs\" disable=\"disabled\">启用云搜索</a>
          </div>
          <div class=\"controls col-md-8 cloud-warning\">
            <span class=\"text-danger\">抱歉，您尚未接入教育云，不能使用云搜索服务</span><a href=\"\">立即接入</a>
          </div>
        ";
            } else {
                // line 26
                echo "          ";
                if ( !$this->env->getExtension('topxia_web_twig')->getSetting("cloud_search.search_enabled")) {
                    // line 27
                    echo "            <div class=\"col-md-2 control-cloud\">
              <a class=\"btn btn-primary mhs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    // line 28
                    echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_search_clause");
                    echo "\">启用云搜索</a>
            </div>
          ";
                } elseif (($this->env->getExtension('topxia_web_twig')->getSetting("cloud_search.search_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("cloud_search.status") == "waiting"))) {
                    // line 31
                    echo "            <div class=\"col-md-10 form-group control-cloud\">
              <span class=\"text-warning\">正在索引数据，预计1～3天完成</span>
            </div>
          ";
                } elseif (($this->env->getExtension('topxia_web_twig')->getSetting("cloud_search.search_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("cloud_search.status") == "ok"))) {
                    // line 35
                    echo "            <div class=\"col-md-2 control-cloud success\">
              <span class=\"text-success\">已启用</span>
            </div>
            <div class=\"controls col-md-8 cloud-warning\">
              <a class=\"btn btn-primary mhs\" href=\"";
                    // line 39
                    echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_search_close");
                    echo "\">关闭</a>
            </div>
          ";
                }
                // line 42
                echo "
        ";
            }
            // line 44
            echo "      </div>

      <div class=\"help-block\">云搜索提供强大的全文搜索引擎，帮助学员轻松、精确的搜索课程、话题、老师、资讯。</div>
    ";
        }
        // line 48
        echo "

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud-search-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 48,  105 => 44,  101 => 42,  95 => 39,  89 => 35,  83 => 31,  77 => 28,  74 => 27,  71 => 26,  62 => 19,  60 => 18,  57 => 17,  51 => 14,  48 => 13,  46 => 12,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_edu_cloud_search' %}*/
/* {% set script_controller = 'setting/cloud' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="cloud-setting-form" method="post" novalidate>*/
/* */
/*     {% if data.status == 'unlink' %}*/
/*       <div class="text-center">*/
/*         <h1 class="text-muted">网络问题，无法连接{{ 'EduSoho'|copyright_less }}开放云平台</h1>*/
/*       </div>*/
/*     {% else %}*/
/*       <div class="row form-group">*/
/*         {% if data.status == 'unconnect' %}*/
/*           <div class="col-md-2 control-cloud">*/
/*             <a class="btn btn-primary mhs" disable="disabled">启用云搜索</a>*/
/*           </div>*/
/*           <div class="controls col-md-8 cloud-warning">*/
/*             <span class="text-danger">抱歉，您尚未接入教育云，不能使用云搜索服务</span><a href="">立即接入</a>*/
/*           </div>*/
/*         {% else %}*/
/*           {% if not setting('cloud_search.search_enabled') %}*/
/*             <div class="col-md-2 control-cloud">*/
/*               <a class="btn btn-primary mhs" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_edu_cloud_search_clause') }}">启用云搜索</a>*/
/*             </div>*/
/*           {% elseif setting('cloud_search.search_enabled') and setting('cloud_search.status') == 'waiting' %}*/
/*             <div class="col-md-10 form-group control-cloud">*/
/*               <span class="text-warning">正在索引数据，预计1～3天完成</span>*/
/*             </div>*/
/*           {% elseif setting('cloud_search.search_enabled') and setting('cloud_search.status') == 'ok' %}*/
/*             <div class="col-md-2 control-cloud success">*/
/*               <span class="text-success">已启用</span>*/
/*             </div>*/
/*             <div class="controls col-md-8 cloud-warning">*/
/*               <a class="btn btn-primary mhs" href="{{ path('admin_edu_cloud_search_close') }}">关闭</a>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <div class="help-block">云搜索提供强大的全文搜索引擎，帮助学员轻松、精确的搜索课程、话题、老师、资讯。</div>*/
/*     {% endif %}*/
/* */
/* */
/* </form>*/
/* */
/* {% endblock %}*/
