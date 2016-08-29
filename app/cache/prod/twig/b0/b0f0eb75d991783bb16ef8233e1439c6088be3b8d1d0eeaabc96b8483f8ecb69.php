<?php

/* TopxiaAdminBundle:App:cloud-license.html.twig */
class __TwigTemplate_65fd2a6fb50f1d24169b40e79f64119874fb4dd378e7b9c7b8db612e19d695a4 extends Twig_Template
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
        echo "            <div class=\"col-md-6\">
              <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <h4 class=\"eduyun-title\">授权信息</h4>
                  <p class=\"text-muted\">";
        // line 5
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasLicense", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasLicense", array()), "0")) : ("0")) == "0")) {
            echo "非商业授权";
        } else {
            echo "商业授权";
        }
        echo "</p>
                  <p class=\"text-muted\">授权域名: ";
        // line 6
        if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), 1)) : (1)) == 1)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), "html", null, true);
        } else {
            echo "<span class=\"license-domain\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), ";"));
            foreach ($context['_seq'] as $context["_key"] => $context["doman"]) {
                echo twig_escape_filter($this->env, $context["doman"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doman'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), "html", null, true);
            echo "个</span>";
        }
        echo "</p>
                </div>
              </div>
            </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:cloud-license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }
}
/*             <div class="col-md-6">*/
/*               <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                   <h4 class="eduyun-title">授权信息</h4>*/
/*                   <p class="text-muted">{% if user.hasLicense|default("0") == "0" %}非商业授权{% else %}商业授权{% endif %}</p>*/
/*                   <p class="text-muted">授权域名: {% if info.licenseDomainCount|default(1) == 1 %}{{ info.licenseDomains }}{% else %}<span class="license-domain" data-toggle="tooltip" data-placement="bottom" title="{% for doman in info.licenseDomains|split(';') %}{{doman}}*/
/*         {% endfor %}">{{info.licenseDomainCount}}个</span>{% endif %}</p>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/* */
