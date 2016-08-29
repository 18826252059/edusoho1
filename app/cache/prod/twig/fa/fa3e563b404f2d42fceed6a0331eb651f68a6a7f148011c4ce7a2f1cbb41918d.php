<?php

/* TopxiaAdminBundle:Block:list-tr.html.twig */
class __TwigTemplate_7dab463722f4459c6e1a964524037867e5710d13d7bd8b2fad303fcbae15c844 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Block:list-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"blockitem";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
        echo "
        <br>
        <span class=\"text-muted text-sm\">编码：";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array()), "html", null, true);
        echo "</span>
    </td>
    <td>
        ";
        // line 9
        echo $context["admin_macro"]->getuser_link(((array_key_exists("latestUpdateUser", $context)) ? (_twig_default_filter((isset($context["latestUpdateUser"]) ? $context["latestUpdateUser"] : null), null)) : (null)));
        echo "
        <br>
        <span class=\"text-muted text-sm\">";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "updateTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    </td>
    <td>
        ";
        // line 14
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()) == "html")) {
            // line 15
            echo "            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_update", array("block" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">编辑html</button>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()) == "template")) {
            // line 19
            echo "            <a class=\"btn btn-sm btn-primary update-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_visual_edit", array("blockId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()))), "html", null, true);
            echo "\">编辑内容</a>
        ";
        }
        // line 21
        echo "
        ";
        // line 22
        if ($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug")) {
            // line 23
            echo "        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_edit", array("block" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" >设置</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_delete", array("id" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()), "html", null, true);
            echo "\">删除</button>
        ";
        }
        // line 27
        echo "    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  80 => 25,  76 => 24,  73 => 23,  71 => 22,  68 => 21,  62 => 19,  60 => 18,  57 => 17,  51 => 15,  49 => 14,  43 => 11,  38 => 9,  32 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* <tr id="blockitem{{ block.id }}">*/
/*     <td>*/
/*         {{ block.title }}*/
/*         <br>*/
/*         <span class="text-muted text-sm">编码：{{ block.code }}</span>*/
/*     </td>*/
/*     <td>*/
/*         {{ admin_macro.user_link(latestUpdateUser|default(null)) }}*/
/*         <br>*/
/*         <span class="text-muted text-sm">{{ block.updateTime|date('Y-n-d H:i:s') }}</span>*/
/*     </td>*/
/*     <td>*/
/*         {% if block.mode == 'html' %}*/
/*             <button class="btn btn-sm btn-primary update-btn" data-url="{{ path('admin_block_update', {block:block.id}) }}" data-toggle="modal" data-target="#modal">编辑html</button>*/
/*         {% endif %}*/
/* */
/*         {% if block.mode == 'template' %}*/
/*             <a class="btn btn-sm btn-primary update-btn" href="{{ path('admin_block_visual_edit', {blockId:block.id}) }}">编辑内容</a>*/
/*         {% endif %}*/
/* */
/*         {% if setting('developer.debug') %}*/
/*         */
/*         <button class="btn btn-sm btn-default edit-btn hidden" data-url="{{ path('admin_block_edit', {block:block.id}) }}" data-toggle="modal" data-target="#modal" >设置</button>*/
/*         <button class="btn btn-sm btn-default delete-btn" data-url="{{ path('admin_block_delete', {id:block.id}) }}" data-target="{{ block.id }}">删除</button>*/
/*         {% endif %}*/
/*     </td>*/
/* </tr>*/
