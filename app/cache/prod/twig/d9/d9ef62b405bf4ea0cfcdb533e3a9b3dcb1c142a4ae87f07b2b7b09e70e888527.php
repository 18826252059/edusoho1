<?php

/* TopxiaAdminBundle:Default:cloud-notice.html.twig */
class __TwigTemplate_55b02d7bf34cf9474f12cccb4f120858ecaad11c495b64318d9f15641762ca5a extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:cloud-notice.html.twig", 1);
        // line 2
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 3
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  ";
            // line 8
            echo "    ";
            // line 9
            echo "      ";
            // line 10
            echo "        ";
            // line 11
            echo "        ";
            // line 12
            echo "          ";
            // line 13
            echo "            ";
            // line 14
            echo "          ";
            // line 15
            echo "            ";
            // line 16
            echo "          ";
            // line 17
            echo "        ";
            // line 18
            echo "        ";
            // line 19
            echo "        ";
            // line 20
            echo "          ";
            // line 21
            echo "        ";
            // line 22
            echo "      ";
            // line 23
            echo "      ";
            // line 24
            echo "        ";
            // line 25
            echo "        ";
            // line 26
            echo "          ";
            // line 27
            echo "        ";
            // line 28
            echo "      ";
            // line 29
            echo "    ";
            // line 30
            echo "  ";
            // line 31
            echo "
  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 36
            echo "  ";
            if (((array_key_exists("notices", $context)) ? (_twig_default_filter((isset($context["notices"]) ? $context["notices"] : null), false)) : (false))) {
                // line 37
                echo "    ";
                // line 38
                echo "      ";
                // line 39
                echo "        ";
                // line 40
                echo "          ";
                // line 41
                echo "          ";
                // line 42
                echo "            ";
                // line 43
                echo "          ";
                // line 44
                echo "          ";
                // line 45
                echo "      ";
                // line 46
                echo "    ";
                // line 47
                echo "  ";
            }
        }
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  105 => 47,  103 => 46,  101 => 45,  99 => 44,  97 => 43,  95 => 42,  93 => 41,  91 => 40,  89 => 39,  87 => 38,  85 => 37,  82 => 36,  75 => 31,  73 => 30,  71 => 29,  69 => 28,  67 => 27,  65 => 26,  63 => 25,  61 => 24,  59 => 23,  57 => 22,  55 => 21,  53 => 20,  51 => 19,  49 => 18,  47 => 17,  45 => 16,  43 => 15,  41 => 14,  39 => 13,  37 => 12,  35 => 11,  33 => 10,  31 => 9,  29 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* {% if is_trial() %}*/
/*   <script>*/
/*     var _hmt = _hmt || [];*/
/*   </script>*/
/*   <script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script>*/
/*   {#<div class="row form-group">#}*/
/*     {#<div class="help-block">#}*/
/*       {#<p style = "text-align: left;font-size:18px">#}*/
/*         {#&nbsp;&nbsp;欢迎使用，试用将于 #}*/
/*         {#<span style="color:#fed032;"> #}*/
/*           {#{% if trialTime.endTime is defined %}#}*/
/*             {#{{trialTime.endTime|date("Y年m月d日")}} #}*/
/*           {#{% else %} #}*/
/*             {#未知时间#}*/
/*           {#{% endif %}#}*/
/*         {#</span> #}*/
/*         {#到期,剩余 #}*/
/*         {#<span style="color:#fed032;">#}*/
/*           {#{% if trialTime.remainDays is defined %} {{ trialTime.remainDays }} {% else %}未知{% endif %}#}*/
/*         {#</span> 天。#}*/
/*       {#</p>#}*/
/*       {#<p style = "text-align: left;font-size:18px">#}*/
/*         {#&nbsp; 您可以联系销售人员购买授权版本，或者延长试用期限。电话：0571-86819929 或 #}*/
/*         {#<span>#}*/
/*           {#<a id="BizQQWPA" href="javascript:" onclick="_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])" style='text-decoration:none;'>QQ：800023860 </a>。#}*/
/*         {#</span>#}*/
/*       {#</p>#}*/
/*     {#</div>#}*/
/*   {#</div>#}*/
/* */
/*   <script type="text/javascript">*/
/*     BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); */
/*   </script>*/
/* {% else %}*/
/*   {% if notices|default(false) %}*/
/*     {#<div class="col-md-12">#}*/
/*       {#<div class="main-system-alert">#}*/
/*         {#<h2> 站长公告</h2>#}*/
/*           {#<ul class="alert-list">#}*/
/*           {#{% for notice in notices %}#}*/
/*             {#<li class="glyphicon glyphicon-bell" style="color:#fed032;font-size:16px;"><a href="{{notice.detailUrl}}" style="margin-left:22px;" target="_blank">{{notice.content}}<span>{{notice.createdTime|date("Y-m-d H:i:s")}}</span></a></li>#}*/
/*           {#{% endfor %}#}*/
/*           {#</ul>#}*/
/*       {#</div>#}*/
/*     {#</div>#}*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* */
