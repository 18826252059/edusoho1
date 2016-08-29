<?php

/* TopxiaAdminBundle:Block:block-visual-items.html.twig */
class __TwigTemplate_e7647e8c3099fc5530794f814bb57e13e00aebbb93a07405e5705a2667f2459c extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "meta", array(), "any", false, true), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "meta", array(), "any", false, true), "items", array()), null)) : (null)));
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
        foreach ($context['_seq'] as $context["code"] => $context["item"]) {
            // line 2
            echo "  ";
            if (($this->getAttribute($context["item"], "type", array()) != "poster")) {
                // line 3
                echo "    <section id=\"js-affix-";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
      <div class=\"item-title\">
        <strong>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</strong>
        <p class=\"text-muted\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", array()), "html", null, true);
                echo "</p>
      </div>

      <div class=\"panel-group sortable-list\" id=\"js-accordion-";
                // line 9
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"  data-code=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\" data-prefix=\"data[";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "]\" data-count=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "count", array()), "html", null, true);
                echo "\" data-role=\"collapse\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), $context["code"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), $context["code"], array(), "array"), null)) : (null)));
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
                foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
                    // line 11
                    echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-heading-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" data-toggle=\"collapse\" data-parent=\"#js-accordion-";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\" href=\"#";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" aria-expanded=\"false\" aria-controls=\"";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\">
              <h4 class=\"panel-title clearfix\">
                <i class=\"js-move-seq glyphicon glyphicon-move pull-left mrs\"></i>
                <span class=\"panel-item-title ellipsis\">";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</span>
                <span class=\"pull-left\">&nbsp;-&nbsp;</span>
                ";
                    // line 17
                    $this->loadTemplate((("TopxiaAdminBundle:Block/Label:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 17)->display($context);
                    // line 18
                    echo "                <i class=\"js-expand-icon glyphicon glyphicon-chevron-down pull-right\" title=\"展开\"></i>
                ";
                    // line 19
                    if (($this->getAttribute($context["item"], "count", array()) != 1)) {
                        // line 20
                        echo "                  <i class=\"mrs js-remove-btn glyphicon glyphicon-trash pull-right\" title=\"删除\"></i>
                ";
                    }
                    // line 22
                    echo "              </h4>

            </div>
            <div id=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-heading-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\">
              <div class=\"panel-body\">
               ";
                    // line 27
                    $this->loadTemplate((("TopxiaAdminBundle:Block/Tag:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 27)->display($context);
                    // line 28
                    echo "              </div>
            </div>
          </div>

        ";
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
                unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "      </div>
    ";
                // line 34
                if (($this->getAttribute($context["item"], "count", array()) != 1)) {
                    // line 35
                    echo "      <div class=\"btn btn-default text-center js-add-btn\" style=\"width:100%;margin-top:-10px;margin-bottom:20px;\">+新增</div>
    ";
                }
                // line 37
                echo "
    </section>
  ";
            } else {
                // line 40
                echo "    <ul class=\"nav nav-pills mvl sortable-list\" id=\"btn-tabs\">
      ";
                // line 41
                $this->loadTemplate((("TopxiaAdminBundle:Block/Label:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 41)->display($context);
                // line 42
                echo "    </ul>
    <div class=\"well\">

      <div class=\"tab-content\">
        ";
                // line 46
                $this->loadTemplate((("TopxiaAdminBundle:Block/Tag:" . $this->getAttribute($context["item"], "type", array())) . ".html.twig"), "TopxiaAdminBundle:Block:block-visual-items.html.twig", 46)->display($context);
                // line 47
                echo "      </div>
      <div class=\"form-group mtl\">
        <div class=\"col-sm-10 col-sm-offset-2\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">
          <button id=\"block-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary mrm\" data-toggle=\"block-edit-form\" data-target=\"#block-edit-form\">保存设置</button>
        </div>
      </div>
    </div>
  ";
            }
            // line 56
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-visual-items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 56,  193 => 50,  188 => 47,  186 => 46,  180 => 42,  178 => 41,  175 => 40,  170 => 37,  166 => 35,  164 => 34,  161 => 33,  143 => 28,  141 => 27,  128 => 25,  123 => 22,  119 => 20,  117 => 19,  114 => 18,  112 => 17,  107 => 15,  85 => 12,  82 => 11,  65 => 10,  55 => 9,  49 => 6,  45 => 5,  39 => 3,  36 => 2,  19 => 1,);
    }
}
/* {% for code,item in block.meta.items|default(null) %}*/
/*   {% if item.type != 'poster' %}*/
/*     <section id="js-affix-{{ code }}">*/
/*       <div class="item-title">*/
/*         <strong>{{ item.title }}</strong>*/
/*         <p class="text-muted">{{ item.desc }}</p>*/
/*       </div>*/
/* */
/*       <div class="panel-group sortable-list" id="js-accordion-{{ code }}"  data-code="{{ code }}" data-prefix="data[{{ code }}]" data-count="{{ item.count }}" data-role="collapse" role="tablist" aria-multiselectable="true">*/
/*         {% for dataId,data in  block.data[code]|default(null)  %}*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab" id="{{code}}-heading-{{ dataId }}" data-toggle="collapse" data-parent="#js-accordion-{{ code }}" href="#{{code}}-collapse-{{ loop.index }}-{{ dataId }}" aria-expanded="false" aria-controls="{{code}}-collapse-{{ loop.index }}-{{ dataId }}">*/
/*               <h4 class="panel-title clearfix">*/
/*                 <i class="js-move-seq glyphicon glyphicon-move pull-left mrs"></i>*/
/*                 <span class="panel-item-title ellipsis">{{ item.title }}</span>*/
/*                 <span class="pull-left">&nbsp;-&nbsp;</span>*/
/*                 {% include 'TopxiaAdminBundle:Block/Label:' ~ item.type ~ '.html.twig' %}*/
/*                 <i class="js-expand-icon glyphicon glyphicon-chevron-down pull-right" title="展开"></i>*/
/*                 {% if item.count != 1 %}*/
/*                   <i class="mrs js-remove-btn glyphicon glyphicon-trash pull-right" title="删除"></i>*/
/*                 {% endif %}*/
/*               </h4>*/
/* */
/*             </div>*/
/*             <div id="{{code}}-collapse-{{ loop.index }}-{{ dataId }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{code}}-heading-{{ dataId }}">*/
/*               <div class="panel-body">*/
/*                {% include 'TopxiaAdminBundle:Block/Tag:' ~ item.type ~ '.html.twig' %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*         {% endfor %}*/
/*       </div>*/
/*     {% if item.count != 1 %}*/
/*       <div class="btn btn-default text-center js-add-btn" style="width:100%;margin-top:-10px;margin-bottom:20px;">+新增</div>*/
/*     {% endif %}*/
/* */
/*     </section>*/
/*   {% else %}*/
/*     <ul class="nav nav-pills mvl sortable-list" id="btn-tabs">*/
/*       {% include 'TopxiaAdminBundle:Block/Label:' ~ item.type ~ '.html.twig' %}*/
/*     </ul>*/
/*     <div class="well">*/
/* */
/*       <div class="tab-content">*/
/*         {% include 'TopxiaAdminBundle:Block/Tag:' ~ item.type ~ '.html.twig' %}*/
/*       </div>*/
/*       <div class="form-group mtl">*/
/*         <div class="col-sm-10 col-sm-offset-2">*/
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*           <button id="block-save-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary mrm" data-toggle="block-edit-form" data-target="#block-edit-form">保存设置</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* {% endfor %}*/
