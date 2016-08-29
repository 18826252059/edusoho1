<?php

/* TopxiaAdminBundle::cloud-app-layout.html.twig */
class __TwigTemplate_dde0563bcad17d66ae7f7f168e1bf1352d184bc3fc182ec569a293b846490a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle::cloud-app-layout.html.twig", 1);
        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content_header($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 4
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
        <p style = \"text-align:center;font-size:16px\">
        ES应用由EduSoho官方提供,授权版⽤户可以通过<a href=\"http://open.edusoho.com\" target=\"_blank\">EduSoho开放云平台</a>购买</p>
        <p style = \"text-align:center;font-size:16px\">如需购买授权版，请联系销售人员。电话：0571-86819929 或 
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::cloud-app-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* {% block content_header %}*/
/*   {% if is_trial() %}*/
/*     <div class="row form-group">*/
/*       <div class="help-block">*/
/*         </br></br>*/
/*         <script>*/
/*           var _hmt = _hmt || [];*/
/*         </script>*/
/*         <script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script>*/
/*         <p style = "text-align:center;font-size:16px">*/
/*         ES应用由EduSoho官方提供,授权版⽤户可以通过<a href="http://open.edusoho.com" target="_blank">EduSoho开放云平台</a>购买</p>*/
/*         <p style = "text-align:center;font-size:16px">如需购买授权版，请联系销售人员。电话：0571-86819929 或 */
/*         <span id="BizQQWPA" onclick="_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])"><a id="BizQQWPA" href="javascript:" style='text-decoration:none;'>QQ：800023860 </a>。</span>*/
/*         </p>*/
/*         <script type="text/javascript">*/
/*             BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); */
/*         </script>*/
/*         </br>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*   {% endif %}*/
/* {% endblock %}*/
