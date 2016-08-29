<?php

/* TopxiaAdminBundle:Default:user-coins-block.html.twig */
class __TwigTemplate_f64cd0ecb16943e34af81cdc3c80d7ec2962f604782cb746245293ab771cca83 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:user-coins-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">

            <a class=\"pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_coin_user_records");
        echo "\"
            >更多</a>
            <h3 class=\"panel-title\">用户虚拟币记录</h3>
             
        </div>

      ";
        // line 12
        if ((isset($context["userIds"]) ? $context["userIds"] : $this->getContext($context, "userIds"))) {
            // line 13
            echo "        <table class=\"table table-condensed table-bordered table-striped table-hover\">
          <thead>
            <tr>
              <th width=\"40%\">用户名</th>
              <th width=\"10%\">充值虚拟币</th>
              <th width=\"15%\">支出虚拟币</th>
              <th width=\"35%\">当前余额</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userIds"]) ? $context["userIds"] : $this->getContext($context, "userIds")));
            foreach ($context['_seq'] as $context["_key"] => $context["userId"]) {
                // line 24
                echo "              <tr><td >";
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $context["userId"], array(), "array"), "link-muted");
                echo "</td><td style=\"color:#1bb974;\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getInCash($context["userId"], "all"), "0.00"), "html", null, true);
                echo "</td><td style=\"color:#ff7b0e;\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getOutCash($context["userId"], "all"), "0.00"), "html", null, true);
                echo "</td><td style=\"color:blue;\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($context["userId"]), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($context["userId"]), "cash", array()), 0)) : (0)), "html", null, true);
                echo "</td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          </tbody>
        </table>
      ";
        } else {
            // line 29
            echo "      <div class=\"empty\">暂无用户虚拟币记录</div>
      ";
        }
        // line 31
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:user-coins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  74 => 29,  69 => 26,  54 => 24,  50 => 23,  38 => 13,  36 => 12,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* <div class="col-md-12">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/* */
/*             <a class="pull-right" href="{{ url('admin_coin_user_records') }}"*/
/*             >更多</a>*/
/*             <h3 class="panel-title">用户虚拟币记录</h3>*/
/*              */
/*         </div>*/
/* */
/*       {% if userIds %}*/
/*         <table class="table table-condensed table-bordered table-striped table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <th width="40%">用户名</th>*/
/*               <th width="10%">充值虚拟币</th>*/
/*               <th width="15%">支出虚拟币</th>*/
/*               <th width="35%">当前余额</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% for userId in userIds %}*/
/*               <tr><td >{{ admin_macro.user_link(users[userId] , 'link-muted') }}</td><td style="color:#1bb974;">{{userInCash(userId,"all")|default("0.00")}}</td><td style="color:#ff7b0e;">{{userOutCash(userId,"all")|default("0.00")}}</td><td style="color:blue;">{{userAccount(userId).cash|default(0)}}</td></tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*       {% else %}*/
/*       <div class="empty">暂无用户虚拟币记录</div>*/
/*       {% endif %}*/
/*     </div>*/
/* </div>*/
