<?php

/* TopxiaWebBundle:Review/Widget:list.html.twig */
class __TwigTemplate_53a281193e2e080b22e440e2db89b671fac7e5636285bce9173fc7e7e2d6958a extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("review/list");
        // line 2
        if (((isset($context["member"]) ? $context["member"] : null) && ((array_key_exists("canReview", $context)) ? (_twig_default_filter((isset($context["canReview"]) ? $context["canReview"] : null), 1)) : (1)))) {
            // line 3
            echo "  <div class=\"clearfix\">
    <button class=\"btn btn-primary btn-sm pull-right js-show-review-form\" ";
            // line 4
            if ( !(isset($context["userReview"]) ? $context["userReview"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">重新评价</button>
  </div>

  <form id=\"review-form\" method=\"post\" action=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["reviewSaveUrl"]) ? $context["reviewSaveUrl"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["userReview"]) ? $context["userReview"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <div class=\"form-group controls\">
      请打分： <span data-rating=\"";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array()), 0)) : (0)), "html", null, true);
            echo "\" data-img-path=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array()) . "/assets/img/raty"), "html", null, true);
            echo "\" class=\"rating-btn\"></span>
      <input type=\"hidden\" name=\"rating\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array()), 0)) : (0)), "html", null, true);
            echo "\">
    </div>

    <div class=\"form-group controls\">
      <textarea class=\"form-control\" rows=\"8\" data-display=\"评价详细内容\" name=\"content\">";
            // line 14
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
    </div>

    <div class=\"form-group clearfix\">
      <span class=\"text-success pull-left\" style=\"display: none;\">评价已保存！</span>
      <button type=\"submit\" class=\"btn btn-primary pull-right\" data-loading-text=\"正在保存...\" autocomplete=\"off\">保存</button>
      <button class=\"btn btn-link pull-right js-hide-review-form\" type=\"button\" ";
            // line 20
            if ((isset($context["userReview"]) ? $context["userReview"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">取消</button>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  </form>
";
        }
        // line 26
        echo "
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            if ((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), false)) : (false))) {
                // line 28
                echo "  ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array");
                // line 29
                echo "  <div class=\"js-reviews\">
    <div class=\"media media-evaluate\">
      <div class=\"media-left\">
        ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
      </div>
      <div class=\"media-body\">
        <div class=\"title\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-m-d"), "html", null, true);
                echo "</div>
        <div class=\"score\">
          ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "star", array(0 => $this->getAttribute($context["review"], "rating", array())), "method"), "html", null, true);
                echo "
        </div>
        <div class=\"content\">
            <div class=\"short-content\">";
                // line 40
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["review"], "content", array()), 100);
                echo "</div>
            <div class=\"full-content\" style=\"display:none;\">";
                // line 41
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
                echo "</div>
        </div>
        <div class=\"actions\">
          <a href=\"javascript:;\" class=\"show-full-btn\">[展开全文]</a>
          <a href=\"javascript:;\" class=\"show-short-btn\" style=\"display:none;\">[收起全文]</a>
        </div>
      </div>
    </div>
  </div>

";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 52
            echo "  <div class=\"empty\">暂无评价</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 55
        if (((array_key_exists("paginator", $context)) ? (_twig_default_filter((isset($context["paginator"]) ? $context["paginator"] : null), null)) : (null))) {
            // line 56
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Review/Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  146 => 55,  143 => 54,  136 => 52,  119 => 41,  115 => 40,  109 => 37,  102 => 35,  96 => 32,  91 => 29,  88 => 28,  82 => 27,  79 => 26,  73 => 23,  65 => 20,  56 => 14,  49 => 10,  43 => 9,  34 => 7,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% do load_script('review/list') %}*/
/* {% if member and canReview|default(1) %}*/
/*   <div class="clearfix">*/
/*     <button class="btn btn-primary btn-sm pull-right js-show-review-form" {% if not userReview %}style="display:none;"{% endif %}>重新评价</button>*/
/*   </div>*/
/* */
/*   <form id="review-form" method="post" action="{{ reviewSaveUrl }}" {% if userReview %}style="display:none;"{% endif %}>*/
/*     <div class="form-group controls">*/
/*       请打分： <span data-rating="{{ userReview.rating|default(0) }}" data-img-path="{{ app.request.basePath ~ '/assets/img/raty'}}" class="rating-btn"></span>*/
/*       <input type="hidden" name="rating" value="{{ userReview.rating|default(0) }}">*/
/*     </div>*/
/* */
/*     <div class="form-group controls">*/
/*       <textarea class="form-control" rows="8" data-display="评价详细内容" name="content">{{ userReview.content|default('') }}</textarea>*/
/*     </div>*/
/* */
/*     <div class="form-group clearfix">*/
/*       <span class="text-success pull-left" style="display: none;">评价已保存！</span>*/
/*       <button type="submit" class="btn btn-primary pull-right" data-loading-text="正在保存..." autocomplete="off">保存</button>*/
/*       <button class="btn btn-link pull-right js-hide-review-form" type="button" {% if userReview %}style="display:none;"{% endif %}>取消</button>*/
/*     </div>*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* {% endif %}*/
/* */
/* {% for review in reviews if users[review.userId]|default(false) %}*/
/*   {% set user = users[review.userId] %}*/
/*   <div class="js-reviews">*/
/*     <div class="media media-evaluate">*/
/*       <div class="media-left">*/
/*         {{ web_macro.user_avatar(user, '', 'avatar-sm') }}*/
/*       </div>*/
/*       <div class="media-body">*/
/*         <div class="title">{{ web_macro.user_link(user) }} {{ review.createdTime|date('Y-m-d') }}</div>*/
/*         <div class="score">*/
/*           {{ web_macro.star(review.rating) }}*/
/*         </div>*/
/*         <div class="content">*/
/*             <div class="short-content">{{ review.content|sub_text(100) }}</div>*/
/*             <div class="full-content" style="display:none;">{{ review.content|nl2br }}</div>*/
/*         </div>*/
/*         <div class="actions">*/
/*           <a href="javascript:;" class="show-full-btn">[展开全文]</a>*/
/*           <a href="javascript:;" class="show-short-btn" style="display:none;">[收起全文]</a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* {% else %}*/
/*   <div class="empty">暂无评价</div>*/
/* {% endfor %}*/
/* */
/* {% if paginator|default(null) %}*/
/*   {{ web_macro.paginator(paginator) }}*/
/* {% endif  %}*/
/* */
