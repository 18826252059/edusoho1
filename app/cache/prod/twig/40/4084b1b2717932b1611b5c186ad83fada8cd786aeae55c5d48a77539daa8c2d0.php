<?php

/* TopxiaAdminBundle:System:optimize.html.twig */
class __TwigTemplate_b55e3265bb56ead5144f6af2380c41b092bccfc0f1ce12cc2658ae9cad027c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:optimize.html.twig", 1);
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
        $context["menu"] = "admin_optimize";
        // line 5
        $context["script_controller"] = "optimize/optimize";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "




<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">刷新缓存</h3>
  </div>
  <div class=\"panel-body\">
  \t<p>
      刷新并重建缓存,让系统保持最优的状态。 
    </p>
    <p >
  \t\t<button id=\"removecache\" class=\"btn btn-primary fr \" data-url=\"";
        // line 23
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_cache");
        echo "\">刷新缓存</button>
  \t</p>
  </div>
</div>

\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t    <h3 class=\"panel-title\">优化磁盘空间</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p>
\t       移除系统的临时数据，释放出更多磁盘空间。
\t    </p>
\t    <p >
\t  \t\t<button id=\"removeTmp\" class=\"btn btn-primary fr\" data-url=\"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_tmp");
        echo "\">优化磁盘空间</button>
\t  \t</p>
\t  </div>
\t</div>


<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">数据库备份和下载</h3>
  </div>
  <div class=\"panel-body\">
   \t<p>
       备份数据库，并下载备份文件。 下载完成后请<span class=\"text-info\">优化磁盘空间</span>。
    </p>
    <p>
  \t\t<button id=\"backupDatabase\" class=\"btn btn-primary fr\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_backupdb");
        echo "\">数据库备份和下载</button>
  \t</p>
  \t<p>
  \t\t<span id=\"dbbackup\" class=\"glyphicon glyphicon-download-alt hide\"><a id=\"dbdownload\" href=\"#\" target=\"_blank\">下载数据库备份</a></span>
  \t</p>
  </div>
</div>

<hr/>
<h1><small>谨慎操作区域</small></h1>
<hr/>

";
        // line 64
        if (!twig_in_filter("upgrade", (isset($context["disabled_features"]) ? $context["disabled_features"] : null))) {
            // line 65
            echo "\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading \">
\t    <h3 class=\"panel-title text-warning\">清空系统备份数据</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t   \t<p class=\"text-warning\">
\t       慎重：请确保当前系统已经升级成功。当系统升级过程中发生意外，备份的系统文件和数据库可用于恢复。
\t    </p>   \t
\t    <p>
\t       清空系统升级过程中备份的系统文件和备数据库。通过清空系统备份数据，可以让系统释放出更多的磁盘空间
\t    <p/>
\t    <p >
\t  \t\t<button id=\"removeBackup\" class=\"btn btn-warning fr\" data-url=\"";
            // line 77
            echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_backup");
            echo "\">清空系统备份数据</button>
\t  \t</p>
\t  </div>
\t</div>

";
        }
        // line 83
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title text-warning\">优化课程视频和相关资料文件</h3>
  </div>
  <div class=\"panel-body\">
   \t<p class=\"text-warning\">
       注意：该功能慎用。请仔细阅读下列说明： 
    </p>
     <p>
       优化课程文件，将已经不存在系统中的课程相关上传文件移除。假如您希望保留这些数据，
       请不要执行该功能。
    </p>
    <p>
  \t\t<a id=\"optimizeFile\" class=\"btn btn-danger fr\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 97
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_show_progressbar");
        echo "\">优化课程文件</a>
  \t</p>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:optimize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 97,  131 => 83,  122 => 77,  108 => 65,  106 => 64,  91 => 52,  73 => 37,  56 => 23,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_optimize' %}*/
/* */
/* {% set script_controller = 'optimize/optimize' %}*/
/* */
/* {% block main %}*/
/* */
/* 	{{ web_macro.flash_messages() }}*/
/* */
/* */
/* */
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">刷新缓存</h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*   	<p>*/
/*       刷新并重建缓存,让系统保持最优的状态。 */
/*     </p>*/
/*     <p >*/
/*   		<button id="removecache" class="btn btn-primary fr " data-url="{{ url('admin_optimize_remove_cache') }}">刷新缓存</button>*/
/*   	</p>*/
/*   </div>*/
/* </div>*/
/* */
/* 	<div class="panel panel-default">*/
/* 	  <div class="panel-heading">*/
/* 	    <h3 class="panel-title">优化磁盘空间</h3>*/
/* 	  </div>*/
/* 	  <div class="panel-body">*/
/* 	   	<p>*/
/* 	       移除系统的临时数据，释放出更多磁盘空间。*/
/* 	    </p>*/
/* 	    <p >*/
/* 	  		<button id="removeTmp" class="btn btn-primary fr" data-url="{{ url('admin_optimize_remove_tmp') }}">优化磁盘空间</button>*/
/* 	  	</p>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">数据库备份和下载</h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*    	<p>*/
/*        备份数据库，并下载备份文件。 下载完成后请<span class="text-info">优化磁盘空间</span>。*/
/*     </p>*/
/*     <p>*/
/*   		<button id="backupDatabase" class="btn btn-primary fr" data-url="{{ url('admin_optimize_backupdb') }}">数据库备份和下载</button>*/
/*   	</p>*/
/*   	<p>*/
/*   		<span id="dbbackup" class="glyphicon glyphicon-download-alt hide"><a id="dbdownload" href="#" target="_blank">下载数据库备份</a></span>*/
/*   	</p>*/
/*   </div>*/
/* </div>*/
/* */
/* <hr/>*/
/* <h1><small>谨慎操作区域</small></h1>*/
/* <hr/>*/
/* */
/* {% if 'upgrade' not in disabled_features %}*/
/* 	<div class="panel panel-default">*/
/* 	  <div class="panel-heading ">*/
/* 	    <h3 class="panel-title text-warning">清空系统备份数据</h3>*/
/* 	  </div>*/
/* 	  <div class="panel-body">*/
/* 	   	<p class="text-warning">*/
/* 	       慎重：请确保当前系统已经升级成功。当系统升级过程中发生意外，备份的系统文件和数据库可用于恢复。*/
/* 	    </p>   	*/
/* 	    <p>*/
/* 	       清空系统升级过程中备份的系统文件和备数据库。通过清空系统备份数据，可以让系统释放出更多的磁盘空间*/
/* 	    <p/>*/
/* 	    <p >*/
/* 	  		<button id="removeBackup" class="btn btn-warning fr" data-url="{{ url('admin_optimize_remove_backup') }}">清空系统备份数据</button>*/
/* 	  	</p>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* {% endif %}*/
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title text-warning">优化课程视频和相关资料文件</h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*    	<p class="text-warning">*/
/*        注意：该功能慎用。请仔细阅读下列说明： */
/*     </p>*/
/*      <p>*/
/*        优化课程文件，将已经不存在系统中的课程相关上传文件移除。假如您希望保留这些数据，*/
/*        请不要执行该功能。*/
/*     </p>*/
/*     <p>*/
/*   		<a id="optimizeFile" class="btn btn-danger fr" type="button" href="#modal" data-toggle="modal" data-url="{{ url('admin_optimize_remove_show_progressbar') }}">优化课程文件</a>*/
/*   	</p>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
