<?php

/* TopxiaAdminBundle:User:index.html.twig */
class __TwigTemplate_a0af05d180e94f68c5a4fdf8df5193a003c2c8d48d51dc486ad101af6df1a3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:index.html.twig", 1);
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
        $context["menu"] = "admin_user_manage";
        // line 5
        $context["script_controller"] = "user/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  <div class=\"mbm\">
    <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
      ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("longinDate" => "登录时间", "registerDate" => "注册时间"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "datePicker"), "method"), "--时间类型--");
        echo "
    </select>

    <div class=\"form-group \">
      <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
      -
      <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"roles\">
      ";
        // line 25
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userRole"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "roles"), "method"), "--所有角色--");
        echo "
    </select>
  </div>

  <span class=\"divider\"></span>
  <div class=\"form-group\">
    <select id=\"keywordUserType\" name=\"keywordUserType\" class=\"form-control\">
      ";
        // line 32
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordUserType"), "method"), "--注册来源--");
        echo "
    </select>
  </div>
  
  <div class=\"form-group\">
    <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
      ";
        // line 38
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userKeyWordType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method"), "--关键词类型--");
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
  </div>


  <button class=\"btn btn-primary\">搜索</button>

  ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 50
            echo "    ";
            if ((isset($context["showUserExport"]) ? $context["showUserExport"] : $this->getContext($context, "showUserExport"))) {
                // line 51
                echo "      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("admin_user_export");
                echo "\">导出搜索结果</a>
    ";
            }
            // line 53
            echo "  ";
        }
        // line 54
        echo "</form>

<table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>用户名</th>
      <th>手机号</th>
      <th>Email</th>
      <th>注册时间</th>
      <th>最近登录</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">用户总数：<strong class=\"inflow-num\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["userCount"]) ? $context["userCount"] : $this->getContext($context, "userCount")), "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 72
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:User:user-table-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 72)->display(array_merge($context, array("user" => $context["user"], "profile" => $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : $this->getContext($context, "profiles")), $this->getAttribute($context["user"], "id", array()), array(), "array"))));
            // line 73
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "  </tbody>
</table>
 ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 76,  173 => 74,  159 => 73,  156 => 72,  139 => 71,  134 => 69,  117 => 54,  114 => 53,  108 => 51,  105 => 50,  103 => 49,  94 => 43,  86 => 38,  77 => 32,  67 => 25,  59 => 20,  54 => 18,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_user_manage' %}*/
/* */
/* {% set script_controller = 'user/list' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form id="user-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/*   <div class="mbm">*/
/*     <select class="form-control" name="datePicker" id="datePicker">*/
/*       {{ select_options({longinDate:'登录时间', registerDate: '注册时间'}, app.request.get('datePicker') ,'--时间类型--') }}*/
/*     </select>*/
/* */
/*     <div class="form-group ">*/
/*       <input class="form-control" type="text" id="startDate" name="startDate" value="{{app.request.query.get('startDate')}}" placeholder="起始时间">*/
/*       -*/
/*       <input class="form-control" type="text" id="endDate" name="endDate" value="{{app.request.query.get('endDate')}}" placeholder="结束时间">*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <select class="form-control" name="roles">*/
/*       {{ select_options(dict('userRole'), app.request.query.get('roles'), '--所有角色--') }}*/
/*     </select>*/
/*   </div>*/
/* */
/*   <span class="divider"></span>*/
/*   <div class="form-group">*/
/*     <select id="keywordUserType" name="keywordUserType" class="form-control">*/
/*       {{ select_options(dict('userType'), app.request.query.get('keywordUserType'), '--注册来源--') }}*/
/*     </select>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     <select id="keywordType" name="keywordType" class="form-control">*/
/*       {{ select_options(dict('userKeyWordType'), app.request.query.get('keywordType'), '--关键词类型--') }}*/
/*     </select>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*   </div>*/
/* */
/* */
/*   <button class="btn btn-primary">搜索</button>*/
/* */
/*   {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*     {% if showUserExport %}*/
/*       <a class="btn btn-primary mhs" id="user-export" data-toggle="modal" data-target="#modal" data-url="{{path('admin_user_export')}}">导出搜索结果</a>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* </form>*/
/* */
/* <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>用户名</th>*/
/*       <th>手机号</th>*/
/*       <th>Email</th>*/
/*       <th>注册时间</th>*/
/*       <th>最近登录</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     <p class="text-muted">*/
/*       <span class="mrl">用户总数：<strong class="inflow-num">{{userCount}}</strong></span>*/
/*     </p>*/
/*     {% for user in users %}*/
/*       {% include 'TopxiaAdminBundle:User:user-table-tr.html.twig' with {user:user,profile:profiles[user.id]} %}*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/*  {{ web_macro.paginator(paginator) }} */
/* {% endblock %}*/
