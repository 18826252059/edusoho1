<?php

/* CustomWebBundle:Course:course-question.html.twig */
class __TwigTemplate_79b02e3ba52350a790a47b14656e91da50d86b687c95991489ad7d754c86f632 extends Twig_Template
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
        if ((isset($context["questions"]) ? $context["questions"] : null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 3
                echo "        <a href=\"lpmas://yunketang/question/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "questionId", array()), "html", null, true);
                echo "\" style=\"color: black;\">
            <div class=\"course-item ";
                // line 4
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo "g-mt10";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "questionId", array()), "html", null, true);
                echo "\">

                ";
                // line 6
                if ($this->getAttribute($context["question"], "contentList", array())) {
                    // line 7
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "contentList", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 8
                        echo "                        ";
                        if ($this->getAttribute($context["content"], "mediaList", array())) {
                            // line 9
                            echo "                            <div class=\"detail-info\">
                                <div class=\"li-title\">";
                            // line 10
                            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "questionTitle", array()), "html", null, true);
                            echo "</div>
                                <ul class=\"li-pic\">
                                    ";
                            // line 12
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "mediaList", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                                // line 13
                                echo "                                        <li class=\"imgbox\" style=\"background: url(";
                                echo twig_escape_filter($this->env, $context["img"], "html", null, true);
                                echo ") no-repeat 50% 50%/cover\"></li>
                                        ";
                                // line 15
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 16
                            echo "                                </ul>
                            </div>
                        ";
                        } else {
                            // line 19
                            echo "                            <div class=\"question-box\">
                                ";
                            // line 20
                            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "questionTitle", array()), "html", null, true);
                            echo "
                            </div>
                        ";
                        }
                        // line 23
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "                ";
                } else {
                    // line 25
                    echo "                    <div class=\"question-box\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "questionTitle", array()), "html", null, true);
                    echo "
                    </div>
                ";
                }
                // line 29
                echo "
                <div class=\"comment-box\">
                    ";
                // line 31
                if ($this->getAttribute($context["question"], "answerList", array())) {
                    // line 32
                    echo "                        ";
                    $context["answerIndex"] = 1;
                    // line 33
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "answerList", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                        // line 34
                        echo "                            ";
                        if (((isset($context["answerIndex"]) ? $context["answerIndex"] : null) == 1)) {
                            // line 35
                            echo "                                ";
                            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:Course:answer", array("answerId" => $context["answer"], "answerCount" => twig_length_filter($this->env, $this->getAttribute($context["question"], "answerList", array())))));
                            echo "
                            ";
                        }
                        // line 37
                        echo "                            ";
                        $context["answerIndex"] = ((isset($context["answerIndex"]) ? $context["answerIndex"] : null) + 1);
                        // line 38
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "                    ";
                }
                // line 40
                echo "                </div>

            </div>
        </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:course-question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 40,  150 => 39,  144 => 38,  141 => 37,  135 => 35,  132 => 34,  127 => 33,  124 => 32,  122 => 31,  118 => 29,  112 => 26,  109 => 25,  106 => 24,  100 => 23,  94 => 20,  91 => 19,  86 => 16,  80 => 15,  75 => 13,  71 => 12,  66 => 10,  63 => 9,  60 => 8,  55 => 7,  53 => 6,  44 => 4,  39 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if questions %}*/
/*     {% for question in questions %}*/
/*         <a href="lpmas://yunketang/question/{{ question.questionId }}" style="color: black;">*/
/*             <div class="course-item {% if loop.index>1 %}g-mt10{% endif %}" data-id="{{ question.questionId }}">*/
/* */
/*                 {% if question.contentList %}*/
/*                     {% for content in question.contentList %}*/
/*                         {% if content.mediaList %}*/
/*                             <div class="detail-info">*/
/*                                 <div class="li-title">{{ question.questionTitle }}</div>*/
/*                                 <ul class="li-pic">*/
/*                                     {% for img in  content.mediaList %}*/
/*                                         <li class="imgbox" style="background: url({{ img }}) no-repeat 50% 50%/cover"></li>*/
/*                                         {#<li class="imgbox"><img src="{{ img }}" alt=""/></li>#}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         {% else %}*/
/*                             <div class="question-box">*/
/*                                 {{ question.questionTitle }}*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <div class="question-box">*/
/*                         {{ question.questionTitle }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <div class="comment-box">*/
/*                     {% if question.answerList %}*/
/*                         {% set answerIndex=1 %}*/
/*                         {% for answer in  question.answerList %}*/
/*                             {% if answerIndex==1 %}*/
/*                                 {{ render(controller('CustomWebBundle:Course:answer',{answerId:answer,answerCount:question.answerList|length})) }}*/
/*                             {% endif %}*/
/*                             {% set answerIndex=answerIndex+1 %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </a>*/
/*     {% endfor %}*/
/* {% endif %}*/
