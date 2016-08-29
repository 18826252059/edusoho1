<?php

/* TopxiaWebBundle:Group:active-member-list.html.twig */
class __TwigTemplate_a3d80b2e36411fa10d3ef1792b82864aa4111e8aab1b205538a76b830ce5b03d extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3 class=\"panel-title\">新加组员</h3></div>
  <div class=\"panel-body\">
    ";
        // line 4
        if ((isset($context["activeMembers"]) ? $context["activeMembers"] : null)) {
            // line 5
            echo "      <ul class=\"user-grids\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activeMembers"]) ? $context["activeMembers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 7
                echo "          <li style=\"width:18%;\">
            ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "user-link user-avatar-link pull-left media-object media-object-small "), "method"), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "      </ul>
    ";
        } else {
            // line 13
            echo "      还没有小组成员！
    ";
        }
        // line 15
        echo "    <br>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:active-member-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  49 => 13,  45 => 11,  36 => 8,  33 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading"><h3 class="panel-title">新加组员</h3></div>*/
/*   <div class="panel-body">*/
/*     {% if activeMembers %}*/
/*       <ul class="user-grids">*/
/*         {% for member in activeMembers %}*/
/*           <li style="width:18%;">*/
/*             {{ web_macro.user_avatar(members[member.userId] , 'user-link user-avatar-link pull-left media-object media-object-small ')}}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     {% else %}*/
/*       还没有小组成员！*/
/*     {% endif %}*/
/*     <br>*/
/*   </div>*/
/* </div>*/
