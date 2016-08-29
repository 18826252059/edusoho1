<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_e417133ce92ccd7e14e614e4f1594d16ceb87c86f06e6561bf437d123b7cb0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["bodyClass"] = "homepage";
        // line 3
        $context["script_controller"] = "index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"es-row-wrap container-gap\">
        <div class=\"rel\">
            <div class=\"homepage-feature homepage-feature-slides mbl\">
                <div class=\"cycle-pager\"></div>
                ";
        // line 11
        echo $this->env->getExtension('topxia_block_twig')->showBlock("default:home_top_banner");
        echo "
            </div>

            <div class=\"u-indexnavcatedialog f-pa\">
                <div class=\"f-fl cateleft f-pa j-cateleft\">
                    <div class=\"catebg f-pa\"></div>
                    <div class=\"items f-pa\">
                      <div class=\"item j-item\"> 
                        <div class=\"curbg\"></div> 
                          <div class=\"inn\"> 
                           <a class=\"f-f0 first\">现代农业科技</a> 
                           <p>
                            <a class=\"second\">生态养殖</a>
                            <a class=\"second\">都市休闲</a>  
                            <a class=\"second\">现代畜牧</a>
                           </p> 
                          </div> 
                        </div>
                        <div class=\"item j-item\"> 
                          <div class=\"curbg\"></div> 
                          <div class=\"inn\"> 
                           <a class=\"f-f0 first\">现代农业服务</a> 
                           <p>
                            <a class=\"second\">政策指导</a>
                            <a class=\"second\">电子商务</a>  
                            <a class=\"second\">物联网</a>
                           </p> 
                          </div> 
                         </div> 
                         <div class=\"item j-item\"> 
                          <div class=\"curbg\"></div> 
                          <div class=\"inn\"> 
                           <a class=\"f-f0 first\">农业经营管理</a> 
                           <p>
                            <a class=\"second\">新型主体</a>
                            <a class=\"second\">经营体制</a>  
                            <a class=\"second\">成果转化</a>
                           </p> 
                          </div> 
                         </div> 
                         <div class=\"item j-item\"> 
                          <div class=\"curbg\"></div> 
                          <div class=\"inn\"> 
                           <a class=\"f-f0 first\">创业人物典型</a> 
                           <p> 
                            <a class=\"second\">合作社理事长</a>
                            <a class=\"second\">青年农场主</a>
                           </p> 
                          </div> 
                         </div> 
                         <div class=\"item j-item last\"> 
                          <div class=\"curbg\"></div> 
                          <div class=\"inn\"> 
                           <a class=\"f-f0 first\">更多分类</a> 
                           <p>
                            <a class=\"second\">中职</a>
                            <a class=\"second\">农村劳动力转移</a>
                           </p> 
                          </div> 
                         </div> 
                    </div>
                </div>
                <div class=\"cateright f-pa f-dn j-cateright \">
                    <a class=\"close f-pa j-close\"></a>

                    <div class=\"f-pa rwrap j-rwrap\">
                        <a class=\"tit\">分类目录</a>
                        <p class=\"links\">
                          <a>生态种养</a><span>/</span><a>都市休闲</a><span>/</span><a>现代畜牧</a><span>/</span><a>渔业水产</a><span>/</span><a>农业装备</a><span>/</span><a>水稻</a><span>/</span><a>玉米</a><span>/</span><a>柑橘</a><span>/</span><a>蔬菜</a>
                        </p>
                        <a class=\"f-f0 tit\">系列课程</a>

                        <p class=\"links\"><a href=\"http://yun.lpmas.com/course/1\">湘晚籼17号规模化栽培</a><br/><a>种粮大户杂交稻栽培技术</a><br/><a>水稻主要病虫害的发生与防治</a><br/><a>黄瓜霜霉病综合防治方案</a><br/><a>科学施肥作物丰收土地健康</a><br/>
                    <a>冬春大棚苋菜高效栽培技术</a><br/>
                    <a>更多<br/></a></p>
                        <a><img src=\"./assets/img/default/1.png\" class=\"f-pa pic\"></a>
                    </div>
                    <div class=\"f-pa rwrap j-rwrap\"> 
                <a class=\"tit\">分类目录</a> 
                 <p class=\"links\">
                 <a>政策指导</a><span>/</span><a>电子商务</a><span>/</span><a>物联网</a><span>/</span><a>金融保险</a><span>/</span><a>法律风控</a><span>/</span><a>农业补贴</a><span>/</span><a>土地流转</a>
                 </p> 
                 <a class=\"f-f0 tit\">系列课程</a> 
                 <p class=\"links\"><a>扶持粮食专业合作社加快发展</a><br/><a>电子商务背景下的农产品营销</a><br/><a>新型农业经营主体项目申报与管理</a><br/><a>三农政策与粮食安全</a><br/><a>2016年中央“一号文件”解读</a><br/><a>外国家庭农场对中国农业发展的启示</a><br/><a>更多<br/></a></p> 
                  <a><img src=\"./assets/img/default/2.png\" class=\"f-pa pic\"></a>
                </div> 
                    <div class=\"f-pa rwrap j-rwrap\"> 
                     <a class=\"tit\">分类目录</a> 
                     <p class=\"links\">
                     <a>新型经营主体</a><span>/</span><a>经营体制</a><span>/</span><a>科技成果转化</a><span>/</span><a>质量控制体系</a><span>/</span><a>品牌创建管理</a>
                     </p> 
                     <a class=\"f-f0 tit\">系列课程</a> 
                     <p class=\"links\"><a>农产品现代化冷链的打造</a><br/><a>我国农产品生鲜电商的发展形势</a><br/><a>10个组建农机服务合作社的成功案例</a><br/><a>高端农产品二维码溯源系统的建设</a><br/><a>我国农产品质量安全管理系列法规</a><br/><a>农民合作社的财务管理规范</a><br/><a>更多<br/></a></p> 
                      <a><img src=\"./assets/img/default/3.png\" class=\"f-pa pic\"></a> 
                    </div> 
                     <div class=\"f-pa rwrap j-rwrap\"> 
                     <a class=\"tit\">分类目录</a> 
                     <p class=\"links\">
                        <a>合作社理事长</a><span>/</span><a>青年农场主</a><span>/</span><a>创业带头人</a><span>/</span><a>家庭农场主</a>
                     </p> 
                     <a class=\"f-f0 tit\">示范合作社</a> 
                      <p class=\"links\"><a>长沙县胖胖蔬菜专业合作社</a><br/><a>衡南县宝盖有机茶叶产销专业合作社</a><br/><a>湘潭县湘田水稻种植专业合作社</a><br/><a>岳阳市君山区丰裕养殖互助专业合作社</a><br/><a>张家界广惠中药材专业合作社</a><br/><a>资兴市清江乡好又精柑橘专业合作社</a><br/><a>更多<br/></a></p> 
                      <a><img src=\"./assets/img/default/4.png\" class=\"f-pa pic\"></a> 
                        </div>
                        <div class=\"f-pa rwrap j-rwrap\"> 
                         <a class=\"tit\">分类目录</a> 
                         <p class=\"links\">
                         <a>更多</a>
                         </p> 
                         <a class=\"f-f0 tit\">系列课程</a> 
                         <p class=\"links\"><a>更多<br/></a></p>
                        </div> 
                </div>
            </div>
            <!-- 导航左侧 完 -->
            <!-- 导航右侧 -->
            <div class=\"sideNav f-pa j-sideAll g-hide\">
                <a class=\"sidelink j-sideImg\"><img
                            src=\"./assets/img/default/rightbanner.jpg\"
                            alt=\"右侧推荐图\" class=\"sideimg\"/></a>

                <div class=\"cnt f-f0 j-cnt\">
                    <a class=\"cntlink f-fc3 f-thide\">水稻浸种催芽与移栽标准化</a>
                    <a class=\"cntlink f-fc3 f-thide\">大棚草莓善用蜜蜂授粉</a>
                    <a class=\"cntlink f-fc3 f-thide\">电子商务背景下的农产品营销</a>
                    <a class=\"cntlink f-fc3 f-thide\">超级稻栽培技术讲座</a>
                    <a class=\"cntlink f-fc3 f-thide\">科学施肥作物丰收土壤健康</a>
                </div>
                <div class=\"bottomcnt\">
                    <a class=\"live f-ib f-pr f-fcgreen\"
                       target=\"_blank\">看视频</a>
                    <a class=\"practise f-ib f-pr f-fcgreen\"
                       target=\"_blank\"></span>看直播</a>
                </div>
            </div>
            <!-- 导航右侧 完 -->
            <!-- 标签 -->
            <div class=\"m-micro\">
                <div class=\"g-flow f-pr\" >
                    <div class=\"f-cb m-micro-wrap\" 
                        <div class=\"cntwrap\" id=\"j-cntwrap\">
                        <div class=\"cntlist\" id=\"j-cntlist\">
                            <div class=\"item f-fl\">
                                <a href=\"http://www.kjs.moa.gov.cn/\">
                                    <div class=\"tit f-f0 f-thide\">农业部科教司</div>
                                    <div class=\"tip f-f0 f-thide\">政策法规/行政审批/执法监督</div>
                                </a>
                            </div>
                            <div class=\"item f-fl\">
                                <a href=\"http://www.hnagri.gov.cn/web/kjjyc/\">
                                    <div class=\"tit f-f0 f-thide\">省农业厅科教处</div>
                                    <div class=\"tip f-f0 f-thide\">培育新型职业农民</div>
                                </a>
                            </div>
                            <div class=\"item f-fl\">
                                <a href=\"http://www.agri.cn/\">
                                    <div class=\"tit f-f0 f-thide\">中国农业信息网</div>
                                    <div class=\"tip f-f0 f-thide\">要闻/政策/市场/农技</div>
                                </a>
                            </div>
                            <div class=\"item f-fl\">
                                <a href=\"http://www.hnagri.gov.cn/web/hnagrizw/gzhd/xxfw/content_144472.html\">
                                    <div class=\"tit f-f0 f-thide\">湖南农业12316</div>
                                    <div class=\"tip f-f0 f-thide\">农业信息服务客户端</div>
                                </a>
                            </div>
                            <div class=\"item f-fl\">
                                <a href=\"http://www.lpmas.com/article/index.shtml\">
                                    <div class=\"tit f-f0 f-thide\">智慧湘农系列手机应用</div>
                                    <div class=\"tip f-f0 f-thide\">农家帮/湘农资讯/湘农商城</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 标签 完 -->
        </div>

        <div class=\"row row-9-3\">

            <div class=\"col-md-9\">

                ";
        // line 194
        if ($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled")) {
            // line 195
            echo "                    ";
            $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendClassrooms", array("count" => 6));
            // line 196
            echo "                    <div class=\"es-box\">
                        <div class=\"es-box-heading\">
                            <h2>";
            // line 198
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</h2>
                            <a class=\"pull-right\" href=\"";
            // line 199
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">更多&gt;</a>
                        </div>
                        <div class=\"es-box-body\">
                            ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 203
                echo "                            ";
                $context["teachers"] = (($this->getAttribute($context["classroom"], "users", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["classroom"], "users", array()), null)) : (null));
                // line 204
                echo "                            ";
                if (($this->getAttribute($context["loop"], "index", array()) <= 5)) {
                    // line 205
                    echo "                            <ul class=\"home-class-list\">
                                <li class=\"class-item\">
                                    <a class=\"class-picture-link\"
                                       href=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">
                                        ";
                    // line 209
                    echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($context["classroom"], "title", array()), "lazyload_class.png");
                    echo "
                                    </a>

                                    <div class=\"class-body\">
                                        <h3 class=\"class-title\">
                                            <a href=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "</a>
                                        </h3>

                                        <div class=\"class-metas\">
                                            ";
                    // line 218
                    if ((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers"))) {
                        // line 219
                        echo "                                                <span class=\"class-teacher\">
                        <i class=\"fa fa-user\"></i>
                                                    ";
                        // line 221
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                            // line 222
                            echo "                                                        ";
                            if (($this->getAttribute($context["loop"], "index", array()) <= 5)) {
                                // line 223
                                echo "                                                            ";
                                // line 224
                                echo "                                                            <a class=\"teacher-nickname mrl\"
                                                               href=\"";
                                // line 225
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
                                echo "</a>
                                                        ";
                            }
                            // line 227
                            echo "                                                    ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 228
                        echo "                      </span>
                                            ";
                    }
                    // line 230
                    echo "                                            <span class=\"class-student hidden-md\"><i
                                                        class=\"fa fa-users\"></i>";
                    // line 231
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                    echo "</span>
                        <span class=\"class-price\">

                          ";
                    // line 234
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                        // line 235
                        echo "                              ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 236
                            echo "                                  ";
                            echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                            echo "
                              ";
                        } else {
                            // line 238
                            echo "                                  免费
                              ";
                        }
                        // line 240
                        echo "                          ";
                    } else {
                        // line 241
                        echo "                              ";
                        if (($this->getAttribute($context["classroom"], "price", array()) > 0)) {
                            // line 242
                            echo "                                  ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "price", array()), "html", null, true);
                            echo "元
                              ";
                        } else {
                            // line 244
                            echo "                                  免费
                              ";
                        }
                        // line 246
                        echo "                          ";
                    }
                    // line 247
                    echo "
                        </span>
                                        </div>
                                        <div class=\"course-num\">共";
                    // line 250
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "courseNum", array()), "html", null, true);
                    echo "课程</div>
                                    </div>
                                </li>
                                ";
                }
                // line 254
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 259
        echo "

                ";
        // line 261
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 262
            echo "                    <div class=\"es-box\">
                        <div class=\"es-box-heading\">
                            <h2>课程</h2>
                            <a class=\"pull-right\" href=\"";
            // line 265
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">更多&gt;</a>
                        </div>
                        <div class=\"es-box-body\">
                            ";
            // line 268
            echo $this->getAttribute($this, "course_lists", array(0 => $this->env->getExtension('topxia_data_twig')->getData("LatestCourses", array("count" => 5))), "method");
            echo "
                        </div>
                    </div>
                ";
        }
        // line 272
        echo "
                ";
        // line 273
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 274
            echo "
                    ";
            // line 275
            if ((isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : $this->getContext($context, "recentLiveCourses"))) {
                // line 276
                echo "                        <div class=\"es-box\">
                            <div class=\"es-box-heading\">
                                <h2>最新直播</h2>
                                ";
                // line 279
                if ((twig_length_filter($this->env, (isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : $this->getContext($context, "recentLiveCourses"))) >= 1)) {
                    // line 280
                    echo "                                    <a class=\"pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("live_course_explore");
                    echo "\">更多&gt;</a>
                                ";
                }
                // line 282
                echo "                            </div>
                            <div class=\"es-box-body\">
                                ";
                // line 284
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:LiveCourse:coursesBlock", array("courses" => (isset($context["recentLiveCourses"]) ? $context["recentLiveCourses"] : $this->getContext($context, "recentLiveCourses")), "view" => "list")));
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 288
            echo "
                ";
        }
        // line 290
        echo "
                ";
        // line 292
        echo "                ";
        $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 4));
        // line 293
        echo "                ";
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 294
            echo "                    <div class=\"es-box news\">
                        <div class=\"es-box-heading\">
                            <h2>最新资讯</h2>
                            <a class=\"pull-right\" href=\"";
            // line 297
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\">更多&gt;</a>
                        </div>
                        <div class=\"es-box-body\">
                            <ul class=\"row\">
                                ";
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 302
                echo "                                    ";
                if ($context["article"]) {
                    // line 303
                    echo "                                        <li class=\"col-md-6\">
                                            <em>";
                    // line 304
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publishedTime", array()), "m-d H:i"), "html", null, true);
                    echo " </em>
                                            <a href=\"";
                    // line 305
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\"
                                               title=\"";
                    // line 306
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\">
                                                <span>[";
                    // line 307
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "category", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "category", array(), "any", false, true), "name", array()), "未分类")) : ("未分类")), "html", null, true);
                    echo "
                                                    ]</span>";
                    // line 308
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo " </a>
                                        </li>
                                    ";
                }
                // line 311
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 316
        echo "
                ";
        // line 318
        echo "                ";
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip") && $this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled"))) {
            // line 319
            echo "                    ";
            $context["levels"] = $this->env->getExtension('topxia_data_twig')->getData("VipLevels", array("count" => 100));
            // line 320
            echo "                    ";
            if ((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels"))) {
                // line 321
                echo "                        <div class=\"es-box vip\">
                            <div class=\"es-box-heading\">
                                <h2>会员专区</h2>
                                <a class=\"pull-right\" href=\"";
                // line 324
                echo $this->env->getExtension('routing')->getPath("vip");
                echo "\">更多&gt;</a>
                            </div>
                            <div class=\"es-box-body\">
                                <ul class=\"row vip-lists\">
                                    ";
                // line 328
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels")));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    // line 329
                    echo "                                        <li class=\"col-sm-12\">
                                            <div class=\"vip-item\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-4 col-md-4\">
                                                        <a href=\"";
                    // line 333
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_course_explore", array("levelId" => $this->getAttribute($context["level"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <img class=\"img-responsive\"
                                                                 src=\"";
                    // line 335
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["level"], "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["level"], "picture", array()), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))), "html", null, true);
                    echo "\"
                                                                 alt=\"";
                    // line 336
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                    echo "\">
                                                    </div>
                                                    </a>
                                                    <div class=\"col-sm-5 col-md-5\">
                                                        <h3>";
                    // line 340
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                    echo "</h3>

                                                        <p>";
                    // line 342
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["level"], "description", array()), 40);
                    echo "</p>
                                                    </div>
                                                    <div class=\"vip-price col-sm-3 col-md-3\">
                                                        ";
                    // line 345
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                        // line 346
                        echo "                                                            <h4> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetPrice(($this->getAttribute($context["level"], "monthPrice", array()) * (isset($context["cashRate"]) ? $context["cashRate"] : $this->getContext($context, "cashRate")))), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                        echo "</h4>
                                                        ";
                    } else {
                        // line 348
                        echo "                                                            <h4>¥&nbsp;";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "monthPrice", array()), "html", null, true);
                        echo "</h4>
                                                        ";
                    }
                    // line 350
                    echo "                                                        <h4><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_buy");
                    echo "\"
                                                               class=\"btn btn-success\">立即购买</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 357
                echo "                                </ul>
                            </div>
                        </div>
                    ";
            }
            // line 361
            echo "                ";
        }
        // line 362
        echo "
                ";
        // line 364
        echo "                ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 365
            echo "                    ";
            $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 15));
            // line 366
            echo "                    ";
            if ((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) {
                // line 367
                echo "                        <div class=\"es-box hot-group\">
                            <div class=\"es-box-heading\"><h2>最热小组</h2><a href=\"";
                // line 368
                echo $this->env->getExtension('routing')->getPath("group_search_group");
                echo "\"
                                                                        class=\"pull-right\">更多&gt;</a></div>
                            <div class=\"es-box-body\">
                                <ul class=\"list-unstyled\">
                                    ";
                // line 372
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 373
                    echo "                                        ";
                    if (($this->getAttribute($context["group"], "status", array()) == "open")) {
                        // line 374
                        echo "                                            <li class=\"col-md-4\">
                                                <div class=\"panel\">
                                                    <div class=\"media\">
                                                        <a href=\"";
                        // line 377
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\"
                                                           title=\"";
                        // line 378
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\" class=\"pull-left\">
                                                            ";
                        // line 379
                        if ($this->getAttribute($context["group"], "logo", array())) {
                            // line 380
                            echo "                                                                <img class=\"avatar-square-sm\"
                                                                     src=\"";
                            // line 381
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array())), "html", null, true);
                            echo "\"
                                                                     alt=\"";
                            // line 382
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                                                            ";
                        } else {
                            // line 384
                            echo "                                                                <img class=\"avatar-square-sm\"
                                                                     src=\"";
                            // line 385
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                            echo "\"
                                                                     alt=\"";
                            // line 386
                            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                            echo "\">
                                                            ";
                        }
                        // line 388
                        echo "                                                        </a>

                                                        <div class=\"media-body\">
                                                            <p><a href=\"";
                        // line 391
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                        echo "\"
                                                                  title=\"";
                        // line 392
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["group"], "title", array()), 10);
                        echo "</a>
                                                            </p>

                                                            <div class=\"text-muted text-normal\">
                                                                ";
                        // line 396
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                        echo "个成员&nbsp;
                                                                ";
                        // line 397
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                        echo "个话题
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        ";
                    }
                    // line 404
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 405
                echo "                                </ul>
                            </div>
                        </div>
                    ";
            }
            // line 409
            echo "                ";
        }
        // line 410
        echo "            </div>

            <div class=\"col-md-3\">
                ";
        // line 413
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:promotedTeacherBlock"));
        echo "

                ";
        // line 416
        echo "                ";
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("mode" => "simple", "count" => 5, "private" => 0));
        // line 417
        echo "                ";
        if ((isset($context["learns"]) ? $context["learns"] : $this->getContext($context, "learns"))) {
            // line 418
            echo "                    <div class=\"es-box status-side\">
                        <div class=\"es-box-heading\">
                            <h2>";
            // line 420
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            // line 421
            echo "                                动态</h2>
                        </div>
                        <div class=\"es-box-body\">
                            <ul class=\"media-list\">
                                ";
            // line 425
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["learns"]) ? $context["learns"] : $this->getContext($context, "learns")));
            foreach ($context['_seq'] as $context["_key"] => $context["learn"]) {
                // line 426
                echo "
                                    <li class=\"media\">
                                        ";
                // line 428
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_avatar", array(0 => $this->getAttribute($context["learn"], "user", array()), 1 => "pull-left", 2 => "media-objec", 3 => true), "method"), "html", null, true);
                echo "

                                        <div class=\"media-body\">
                                            ";
                // line 431
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "user_link", array(0 => $this->getAttribute($context["learn"], "user", array())), "method"), "html", null, true);
                echo "
                                            ";
                // line 432
                echo $this->getAttribute($context["learn"], "message", array());
                echo "
                                        </div>
                                    </li>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "                            </ul>
                        </div>
                    </div>
                ";
        }
        // line 441
        echo "
                ";
        // line 442
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:latestReviewsBlock", array("number" => 5)));
        echo "

                ";
        // line 445
        echo "                ";
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array()), 1)) : (1))) {
            // line 446
            echo "                    ";
            $context["hotThreads"] = $this->env->getExtension('topxia_data_twig')->getData("HotThreads", array("count" => 11));
            // line 447
            echo "                    ";
            if ((isset($context["hotThreads"]) ? $context["hotThreads"] : $this->getContext($context, "hotThreads"))) {
                // line 448
                echo "                        <div class=\"es-box hot-threads\">
                            <div class=\"es-box-heading\"><h2>最热话题</h2></div>
                            <div class=\"es-box-body\">
                                <ul class=\"text-list\">
                                    ";
                // line 452
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["hotThreads"]) ? $context["hotThreads"] : $this->getContext($context, "hotThreads")));
                foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                    // line 453
                    echo "                                        ";
                    if ($context["thread"]) {
                        // line 454
                        echo "                                            <li style=\"border-bottom:none;background:url('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                        echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\">
                                                <a href=\"";
                        // line 455
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["thread"], "title", array()), 15);
                        echo "</a>
                                            </li>
                                        ";
                    }
                    // line 458
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 459
                echo "                                </ul>
                            </div>
                        </div>
                    ";
            }
            // line 463
            echo "                ";
        }
        // line 464
        echo "
            </div>

        </div>

    </div>
";
    }

    // line 472
    public function getcourse_lists($__courses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "courses" => $__courses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 473
            echo "    ";
            $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:index.html.twig", 473);
            // line 474
            echo "    ";
            $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "default")) : ("default"));
            // line 475
            echo "    <ul class=\"course-wide-list\">
        ";
            // line 476
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 477
                echo "            <li class=\"course-item clearfix\">
                <a class=\"course-picture-link\" href=\"";
                // line 478
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 479
                echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "course-picture", "");
                echo "
                </a>

                <div class=\"course-body\">
                    <div class=\"course-price-info\">
                        ";
                // line 484
                $this->loadTemplate("TopxiaWebBundle:Course:price-widget.html.twig", "TopxiaWebBundle:Default:index.html.twig", 484)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                // line 485
                echo "                    </div>
                    <h4 class=\"course-title\"><a href=\"";
                // line 486
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
                        ";
                // line 487
                if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                    // line 488
                    echo "                            <span class=\"label label-success \">更新中</span>
                        ";
                } elseif (($this->getAttribute(                // line 489
$context["course"], "serializeMode", array()) == "finished")) {
                    // line 490
                    echo "                            <span class=\"label label-warning \">已完结</span>
                        ";
                }
                // line 492
                echo "                        ";
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 493
                    echo "                            ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                    // line 494
                    echo "                            ";
                    if ((((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array())))) {
                        // line 495
                        echo "                                <span class=\"label label-warning series-mode-label\">正在直播中</span>
                            ";
                    } else {
                        // line 497
                        echo "                                <span class=\"label label-success series-mode-label\">直播</span>
                            ";
                    }
                    // line 499
                    echo "                        ";
                }
                // line 500
                echo "                    </h4>

                    ";
                // line 502
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 503
                    echo "                        ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                    // line 504
                    echo "                        ";
                    if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                        // line 505
                        echo "                            <div class=\"live-course-lesson mbm\">
                                <span class=\"text-success fsm mrm\">";
                        // line 506
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()), "n月j日 H:i"), "html", null, true);
                        echo "
                                    ~ ";
                        // line 507
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array()), "H:i"), "html", null, true);
                        echo "</span>
                                <span class=\"text-muted fsm mrm\">第";
                        // line 508
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()), "html", null, true);
                        echo "课时</span>
                            </div>
                        ";
                    }
                    // line 511
                    echo "                    ";
                } else {
                    // line 512
                    echo "                        <div class=\"course-about ellipsis\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "</div>
                    ";
                }
                // line 514
                echo "
                    <div class=\"course-footer clearfix\">

                        ";
                // line 517
                $context["teacher"] = _twig_default_filter(twig_first($this->env, $this->getAttribute($context["course"], "teachers", array())), null);
                // line 518
                echo "                        ";
                if ((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher"))) {
                    // line 519
                    echo "                            <div class=\"teacher\">
                                ";
                    // line 520
                    echo $context["web_macro"]->getuser_avatar((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "pull-left", "teacher-avatar");
                    echo "
                                <a class=\"teacher-nickname ellipsis\"
                                   href=\"";
                    // line 522
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
                    echo "</a>
                                <span class=\"teacher-title ellipsis\">";
                    // line 523
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array()), "html", null, true);
                    echo "</span>
                            </div>
                        ";
                }
                // line 526
                echo "                        <div class=\"course-metas\">
                            <span class=\"stars-";
                // line 527
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
                echo "\">&nbsp;</span>
                            ";
                // line 528
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 529
                    echo "                                <span class=\"divider\"></span>
                                <span class=\"text-muted mrm mls\"><strong>";
                    // line 530
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                    echo "</strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 532
                echo "                        </div>
                    </div>
                </div>
            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 537
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1106 => 537,  1088 => 532,  1081 => 530,  1078 => 529,  1076 => 528,  1072 => 527,  1069 => 526,  1063 => 523,  1057 => 522,  1052 => 520,  1049 => 519,  1046 => 518,  1044 => 517,  1039 => 514,  1033 => 512,  1030 => 511,  1024 => 508,  1020 => 507,  1016 => 506,  1013 => 505,  1010 => 504,  1007 => 503,  1005 => 502,  1001 => 500,  998 => 499,  994 => 497,  990 => 495,  987 => 494,  984 => 493,  981 => 492,  977 => 490,  975 => 489,  972 => 488,  970 => 487,  964 => 486,  961 => 485,  959 => 484,  951 => 479,  947 => 478,  944 => 477,  927 => 476,  924 => 475,  921 => 474,  918 => 473,  906 => 472,  896 => 464,  893 => 463,  887 => 459,  881 => 458,  873 => 455,  868 => 454,  865 => 453,  861 => 452,  855 => 448,  852 => 447,  849 => 446,  846 => 445,  841 => 442,  838 => 441,  832 => 437,  821 => 432,  817 => 431,  811 => 428,  807 => 426,  803 => 425,  797 => 421,  791 => 420,  787 => 418,  784 => 417,  781 => 416,  776 => 413,  771 => 410,  768 => 409,  762 => 405,  756 => 404,  746 => 397,  742 => 396,  733 => 392,  729 => 391,  724 => 388,  719 => 386,  715 => 385,  712 => 384,  707 => 382,  703 => 381,  700 => 380,  698 => 379,  694 => 378,  690 => 377,  685 => 374,  682 => 373,  678 => 372,  671 => 368,  668 => 367,  665 => 366,  662 => 365,  659 => 364,  656 => 362,  653 => 361,  647 => 357,  633 => 350,  627 => 348,  620 => 346,  618 => 345,  612 => 342,  607 => 340,  600 => 336,  596 => 335,  591 => 333,  585 => 329,  581 => 328,  574 => 324,  569 => 321,  566 => 320,  563 => 319,  560 => 318,  557 => 316,  551 => 312,  545 => 311,  539 => 308,  535 => 307,  531 => 306,  527 => 305,  523 => 304,  520 => 303,  517 => 302,  513 => 301,  506 => 297,  501 => 294,  498 => 293,  495 => 292,  492 => 290,  488 => 288,  481 => 284,  477 => 282,  471 => 280,  469 => 279,  464 => 276,  462 => 275,  459 => 274,  457 => 273,  454 => 272,  447 => 268,  441 => 265,  436 => 262,  434 => 261,  430 => 259,  424 => 255,  410 => 254,  403 => 250,  398 => 247,  395 => 246,  391 => 244,  385 => 242,  382 => 241,  379 => 240,  375 => 238,  367 => 236,  364 => 235,  362 => 234,  356 => 231,  353 => 230,  349 => 228,  335 => 227,  328 => 225,  325 => 224,  323 => 223,  320 => 222,  303 => 221,  299 => 219,  297 => 218,  288 => 214,  280 => 209,  276 => 208,  271 => 205,  268 => 204,  265 => 203,  248 => 202,  242 => 199,  238 => 198,  234 => 196,  231 => 195,  229 => 194,  43 => 11,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% set bodyClass = 'homepage' %}*/
/* {% set script_controller = 'index' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="es-row-wrap container-gap">*/
/*         <div class="rel">*/
/*             <div class="homepage-feature homepage-feature-slides mbl">*/
/*                 <div class="cycle-pager"></div>*/
/*                 {{ block_show('default:home_top_banner') }}*/
/*             </div>*/
/* */
/*             <div class="u-indexnavcatedialog f-pa">*/
/*                 <div class="f-fl cateleft f-pa j-cateleft">*/
/*                     <div class="catebg f-pa"></div>*/
/*                     <div class="items f-pa">*/
/*                       <div class="item j-item"> */
/*                         <div class="curbg"></div> */
/*                           <div class="inn"> */
/*                            <a class="f-f0 first">现代农业科技</a> */
/*                            <p>*/
/*                             <a class="second">生态养殖</a>*/
/*                             <a class="second">都市休闲</a>  */
/*                             <a class="second">现代畜牧</a>*/
/*                            </p> */
/*                           </div> */
/*                         </div>*/
/*                         <div class="item j-item"> */
/*                           <div class="curbg"></div> */
/*                           <div class="inn"> */
/*                            <a class="f-f0 first">现代农业服务</a> */
/*                            <p>*/
/*                             <a class="second">政策指导</a>*/
/*                             <a class="second">电子商务</a>  */
/*                             <a class="second">物联网</a>*/
/*                            </p> */
/*                           </div> */
/*                          </div> */
/*                          <div class="item j-item"> */
/*                           <div class="curbg"></div> */
/*                           <div class="inn"> */
/*                            <a class="f-f0 first">农业经营管理</a> */
/*                            <p>*/
/*                             <a class="second">新型主体</a>*/
/*                             <a class="second">经营体制</a>  */
/*                             <a class="second">成果转化</a>*/
/*                            </p> */
/*                           </div> */
/*                          </div> */
/*                          <div class="item j-item"> */
/*                           <div class="curbg"></div> */
/*                           <div class="inn"> */
/*                            <a class="f-f0 first">创业人物典型</a> */
/*                            <p> */
/*                             <a class="second">合作社理事长</a>*/
/*                             <a class="second">青年农场主</a>*/
/*                            </p> */
/*                           </div> */
/*                          </div> */
/*                          <div class="item j-item last"> */
/*                           <div class="curbg"></div> */
/*                           <div class="inn"> */
/*                            <a class="f-f0 first">更多分类</a> */
/*                            <p>*/
/*                             <a class="second">中职</a>*/
/*                             <a class="second">农村劳动力转移</a>*/
/*                            </p> */
/*                           </div> */
/*                          </div> */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="cateright f-pa f-dn j-cateright ">*/
/*                     <a class="close f-pa j-close"></a>*/
/* */
/*                     <div class="f-pa rwrap j-rwrap">*/
/*                         <a class="tit">分类目录</a>*/
/*                         <p class="links">*/
/*                           <a>生态种养</a><span>/</span><a>都市休闲</a><span>/</span><a>现代畜牧</a><span>/</span><a>渔业水产</a><span>/</span><a>农业装备</a><span>/</span><a>水稻</a><span>/</span><a>玉米</a><span>/</span><a>柑橘</a><span>/</span><a>蔬菜</a>*/
/*                         </p>*/
/*                         <a class="f-f0 tit">系列课程</a>*/
/* */
/*                         <p class="links"><a href="http://yun.lpmas.com/course/1">湘晚籼17号规模化栽培</a><br/><a>种粮大户杂交稻栽培技术</a><br/><a>水稻主要病虫害的发生与防治</a><br/><a>黄瓜霜霉病综合防治方案</a><br/><a>科学施肥作物丰收土地健康</a><br/>*/
/*                     <a>冬春大棚苋菜高效栽培技术</a><br/>*/
/*                     <a>更多<br/></a></p>*/
/*                         <a><img src="./assets/img/default/1.png" class="f-pa pic"></a>*/
/*                     </div>*/
/*                     <div class="f-pa rwrap j-rwrap"> */
/*                 <a class="tit">分类目录</a> */
/*                  <p class="links">*/
/*                  <a>政策指导</a><span>/</span><a>电子商务</a><span>/</span><a>物联网</a><span>/</span><a>金融保险</a><span>/</span><a>法律风控</a><span>/</span><a>农业补贴</a><span>/</span><a>土地流转</a>*/
/*                  </p> */
/*                  <a class="f-f0 tit">系列课程</a> */
/*                  <p class="links"><a>扶持粮食专业合作社加快发展</a><br/><a>电子商务背景下的农产品营销</a><br/><a>新型农业经营主体项目申报与管理</a><br/><a>三农政策与粮食安全</a><br/><a>2016年中央“一号文件”解读</a><br/><a>外国家庭农场对中国农业发展的启示</a><br/><a>更多<br/></a></p> */
/*                   <a><img src="./assets/img/default/2.png" class="f-pa pic"></a>*/
/*                 </div> */
/*                     <div class="f-pa rwrap j-rwrap"> */
/*                      <a class="tit">分类目录</a> */
/*                      <p class="links">*/
/*                      <a>新型经营主体</a><span>/</span><a>经营体制</a><span>/</span><a>科技成果转化</a><span>/</span><a>质量控制体系</a><span>/</span><a>品牌创建管理</a>*/
/*                      </p> */
/*                      <a class="f-f0 tit">系列课程</a> */
/*                      <p class="links"><a>农产品现代化冷链的打造</a><br/><a>我国农产品生鲜电商的发展形势</a><br/><a>10个组建农机服务合作社的成功案例</a><br/><a>高端农产品二维码溯源系统的建设</a><br/><a>我国农产品质量安全管理系列法规</a><br/><a>农民合作社的财务管理规范</a><br/><a>更多<br/></a></p> */
/*                       <a><img src="./assets/img/default/3.png" class="f-pa pic"></a> */
/*                     </div> */
/*                      <div class="f-pa rwrap j-rwrap"> */
/*                      <a class="tit">分类目录</a> */
/*                      <p class="links">*/
/*                         <a>合作社理事长</a><span>/</span><a>青年农场主</a><span>/</span><a>创业带头人</a><span>/</span><a>家庭农场主</a>*/
/*                      </p> */
/*                      <a class="f-f0 tit">示范合作社</a> */
/*                       <p class="links"><a>长沙县胖胖蔬菜专业合作社</a><br/><a>衡南县宝盖有机茶叶产销专业合作社</a><br/><a>湘潭县湘田水稻种植专业合作社</a><br/><a>岳阳市君山区丰裕养殖互助专业合作社</a><br/><a>张家界广惠中药材专业合作社</a><br/><a>资兴市清江乡好又精柑橘专业合作社</a><br/><a>更多<br/></a></p> */
/*                       <a><img src="./assets/img/default/4.png" class="f-pa pic"></a> */
/*                         </div>*/
/*                         <div class="f-pa rwrap j-rwrap"> */
/*                          <a class="tit">分类目录</a> */
/*                          <p class="links">*/
/*                          <a>更多</a>*/
/*                          </p> */
/*                          <a class="f-f0 tit">系列课程</a> */
/*                          <p class="links"><a>更多<br/></a></p>*/
/*                         </div> */
/*                 </div>*/
/*             </div>*/
/*             <!-- 导航左侧 完 -->*/
/*             <!-- 导航右侧 -->*/
/*             <div class="sideNav f-pa j-sideAll g-hide">*/
/*                 <a class="sidelink j-sideImg"><img*/
/*                             src="./assets/img/default/rightbanner.jpg"*/
/*                             alt="右侧推荐图" class="sideimg"/></a>*/
/* */
/*                 <div class="cnt f-f0 j-cnt">*/
/*                     <a class="cntlink f-fc3 f-thide">水稻浸种催芽与移栽标准化</a>*/
/*                     <a class="cntlink f-fc3 f-thide">大棚草莓善用蜜蜂授粉</a>*/
/*                     <a class="cntlink f-fc3 f-thide">电子商务背景下的农产品营销</a>*/
/*                     <a class="cntlink f-fc3 f-thide">超级稻栽培技术讲座</a>*/
/*                     <a class="cntlink f-fc3 f-thide">科学施肥作物丰收土壤健康</a>*/
/*                 </div>*/
/*                 <div class="bottomcnt">*/
/*                     <a class="live f-ib f-pr f-fcgreen"*/
/*                        target="_blank">看视频</a>*/
/*                     <a class="practise f-ib f-pr f-fcgreen"*/
/*                        target="_blank"></span>看直播</a>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- 导航右侧 完 -->*/
/*             <!-- 标签 -->*/
/*             <div class="m-micro">*/
/*                 <div class="g-flow f-pr" >*/
/*                     <div class="f-cb m-micro-wrap" */
/*                         <div class="cntwrap" id="j-cntwrap">*/
/*                         <div class="cntlist" id="j-cntlist">*/
/*                             <div class="item f-fl">*/
/*                                 <a href="http://www.kjs.moa.gov.cn/">*/
/*                                     <div class="tit f-f0 f-thide">农业部科教司</div>*/
/*                                     <div class="tip f-f0 f-thide">政策法规/行政审批/执法监督</div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="item f-fl">*/
/*                                 <a href="http://www.hnagri.gov.cn/web/kjjyc/">*/
/*                                     <div class="tit f-f0 f-thide">省农业厅科教处</div>*/
/*                                     <div class="tip f-f0 f-thide">培育新型职业农民</div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="item f-fl">*/
/*                                 <a href="http://www.agri.cn/">*/
/*                                     <div class="tit f-f0 f-thide">中国农业信息网</div>*/
/*                                     <div class="tip f-f0 f-thide">要闻/政策/市场/农技</div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="item f-fl">*/
/*                                 <a href="http://www.hnagri.gov.cn/web/hnagrizw/gzhd/xxfw/content_144472.html">*/
/*                                     <div class="tit f-f0 f-thide">湖南农业12316</div>*/
/*                                     <div class="tip f-f0 f-thide">农业信息服务客户端</div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="item f-fl">*/
/*                                 <a href="http://www.lpmas.com/article/index.shtml">*/
/*                                     <div class="tit f-f0 f-thide">智慧湘农系列手机应用</div>*/
/*                                     <div class="tip f-f0 f-thide">农家帮/湘农资讯/湘农商城</div>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- 标签 完 -->*/
/*         </div>*/
/* */
/*         <div class="row row-9-3">*/
/* */
/*             <div class="col-md-9">*/
/* */
/*                 {% if setting('classroom.enabled') %}*/
/*                     {% set classrooms = data('RecommendClassrooms',{'count':6}) %}*/
/*                     <div class="es-box">*/
/*                         <div class="es-box-heading">*/
/*                             <h2>{{ setting('classroom.name')|default("班级") }}</h2>*/
/*                             <a class="pull-right" href="{{ path('classroom_explore') }}">更多&gt;</a>*/
/*                         </div>*/
/*                         <div class="es-box-body">*/
/*                             {% for classroom in classrooms %}*/
/*                             {% set teachers = classroom.users|default(null) %}*/
/*                             {% if loop.index <= 5 %}*/
/*                             <ul class="home-class-list">*/
/*                                 <li class="class-item">*/
/*                                     <a class="class-picture-link"*/
/*                                        href="{{ path('classroom_show', {id:classroom.id}) }}">*/
/*                                         {{ lazy_img(filepath(classroom.middlePicture, 'classroom.png'), 'img-responsive', classroom.title, 'lazyload_class.png') }}*/
/*                                     </a>*/
/* */
/*                                     <div class="class-body">*/
/*                                         <h3 class="class-title">*/
/*                                             <a href="{{ path('classroom_show', {id:classroom.id}) }}">{{ classroom.title }}</a>*/
/*                                         </h3>*/
/* */
/*                                         <div class="class-metas">*/
/*                                             {% if teachers %}*/
/*                                                 <span class="class-teacher">*/
/*                         <i class="fa fa-user"></i>*/
/*                                                     {% for teacher in teachers %}*/
/*                                                         {% if loop.index <= 5 %}*/
/*                                                             {# {{ web_macro.user_link(teacher,'teacher-nickname mrl') }} #}*/
/*                                                             <a class="teacher-nickname mrl"*/
/*                                                                href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                       </span>*/
/*                                             {% endif %}*/
/*                                             <span class="class-student hidden-md"><i*/
/*                                                         class="fa fa-users"></i>{{ classroom.studentNum + classroom.auditorNum }}</span>*/
/*                         <span class="class-price">*/
/* */
/*                           {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                               {% if classroom.price > 0 %}*/
/*                                   {{ classroom.price * setting('coin.cash_rate') }} {{ setting('coin.coin_name') }}*/
/*                               {% else %}*/
/*                                   免费*/
/*                               {% endif %}*/
/*                           {% else %}*/
/*                               {% if classroom.price > 0 %}*/
/*                                   {{ classroom.price }}元*/
/*                               {% else %}*/
/*                                   免费*/
/*                               {% endif %}*/
/*                           {% endif %}*/
/* */
/*                         </span>*/
/*                                         </div>*/
/*                                         <div class="course-num">共{{ classroom.courseNum }}课程</div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/* */
/*                 {% if courses %}*/
/*                     <div class="es-box">*/
/*                         <div class="es-box-heading">*/
/*                             <h2>课程</h2>*/
/*                             <a class="pull-right" href="{{ path('course_explore') }}">更多&gt;</a>*/
/*                         </div>*/
/*                         <div class="es-box-body">*/
/*                             {{ _self.course_lists(data('LatestCourses',{ count:5 })) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if setting('course.live_course_enabled') %}*/
/* */
/*                     {% if recentLiveCourses %}*/
/*                         <div class="es-box">*/
/*                             <div class="es-box-heading">*/
/*                                 <h2>最新直播</h2>*/
/*                                 {% if recentLiveCourses|length >= 1 %}*/
/*                                     <a class="pull-right" href="{{ path('live_course_explore') }}">更多&gt;</a>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="es-box-body">*/
/*                                 {{ render(controller('TopxiaWebBundle:LiveCourse:coursesBlock', { courses:recentLiveCourses, view: 'list'})) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                 {% endif %}*/
/* */
/*                 {# 最新资讯 #}*/
/*                 {% set articles = data('LatestArticles',{'count':4}) %}*/
/*                 {% if articles %}*/
/*                     <div class="es-box news">*/
/*                         <div class="es-box-heading">*/
/*                             <h2>最新资讯</h2>*/
/*                             <a class="pull-right" href="{{ path('article_show') }}">更多&gt;</a>*/
/*                         </div>*/
/*                         <div class="es-box-body">*/
/*                             <ul class="row">*/
/*                                 {% for article in articles %}*/
/*                                     {% if article %}*/
/*                                         <li class="col-md-6">*/
/*                                             <em>{{ article.publishedTime|date('m-d H:i') }} </em>*/
/*                                             <a href="{{ path('article_detail', {id:article.id}) }}"*/
/*                                                title="{{ article.title }}">*/
/*                                                 <span>[{{ article.category.name|default('未分类') }}*/
/*                                                     ]</span>{{ article.title }} </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {# vip #}*/
/*                 {% if is_plugin_installed('Vip') and setting('vip.enabled') %}*/
/*                     {% set levels = data('VipLevels',{'count':100}) %}*/
/*                     {% if levels %}*/
/*                         <div class="es-box vip">*/
/*                             <div class="es-box-heading">*/
/*                                 <h2>会员专区</h2>*/
/*                                 <a class="pull-right" href="{{ path('vip') }}">更多&gt;</a>*/
/*                             </div>*/
/*                             <div class="es-box-body">*/
/*                                 <ul class="row vip-lists">*/
/*                                     {% for level in levels %}*/
/*                                         <li class="col-sm-12">*/
/*                                             <div class="vip-item">*/
/*                                                 <div class="row">*/
/*                                                     <div class="col-sm-4 col-md-4">*/
/*                                                         <a href="{{ path('vip_course_explore', {levelId:level.id}) }}">*/
/*                                                             <img class="img-responsive"*/
/*                                                                  src="{{ level.picture|default(asset('assets/img/default/vip-default.png')) }}"*/
/*                                                                  alt="{{ level.name }}">*/
/*                                                     </div>*/
/*                                                     </a>*/
/*                                                     <div class="col-sm-5 col-md-5">*/
/*                                                         <h3>{{ level.name }}</h3>*/
/* */
/*                                                         <p>{{ level.description|plain_text(40) }}</p>*/
/*                                                     </div>*/
/*                                                     <div class="vip-price col-sm-3 col-md-3">*/
/*                                                         {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                                                             <h4> {{ set_price((level.monthPrice) * (cashRate)) }}{{ setting('coin.coin_name') }}</h4>*/
/*                                                         {% else %}*/
/*                                                             <h4>¥&nbsp;{{ level.monthPrice }}</h4>*/
/*                                                         {% endif %}*/
/*                                                         <h4><a href="{{ path('vip_buy') }}"*/
/*                                                                class="btn btn-success">立即购买</a></h4>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/* */
/*                 {# 小组 #}*/
/*                 {% if setting('group').group_show|default(1) %}*/
/*                     {% set groups = data('HotGroup', {'count':15}) %}*/
/*                     {% if groups %}*/
/*                         <div class="es-box hot-group">*/
/*                             <div class="es-box-heading"><h2>最热小组</h2><a href="{{ path('group_search_group') }}"*/
/*                                                                         class="pull-right">更多&gt;</a></div>*/
/*                             <div class="es-box-body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     {% for group in groups %}*/
/*                                         {% if group.status=='open' %}*/
/*                                             <li class="col-md-4">*/
/*                                                 <div class="panel">*/
/*                                                     <div class="media">*/
/*                                                         <a href="{{ path('group_show',{id:group.id}) }}"*/
/*                                                            title="{{ group.title }}" class="pull-left">*/
/*                                                             {% if group.logo %}*/
/*                                                                 <img class="avatar-square-sm"*/
/*                                                                      src="{{ filepath(group.logo) }}"*/
/*                                                                      alt="{{ group.title }}">*/
/*                                                             {% else %}*/
/*                                                                 <img class="avatar-square-sm"*/
/*                                                                      src="{{ asset('assets/img/default/group.png') }}"*/
/*                                                                      alt="{{ group.title }}">*/
/*                                                             {% endif %}*/
/*                                                         </a>*/
/* */
/*                                                         <div class="media-body">*/
/*                                                             <p><a href="{{ path('group_show',{id:group.id}) }}"*/
/*                                                                   title="{{ group.title }}">{{ group.title|sub_text(10) }}</a>*/
/*                                                             </p>*/
/* */
/*                                                             <div class="text-muted text-normal">*/
/*                                                                 {{ group.memberNum }}个成员&nbsp;*/
/*                                                                 {{ group.threadNum }}个话题*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             <div class="col-md-3">*/
/*                 {{ render(controller('TopxiaWebBundle:Default:promotedTeacherBlock')) }}*/
/* */
/*                 {# 学员动态 #}*/
/*                 {% set learns = data('LatestStatuses', {mode:'simple', count: 5,private:0}) %}*/
/*                 {% if learns %}*/
/*                     <div class="es-box status-side">*/
/*                         <div class="es-box-heading">*/
/*                             <h2>{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员') }}{% else %}学员{% endif %}*/
/*                                 动态</h2>*/
/*                         </div>*/
/*                         <div class="es-box-body">*/
/*                             <ul class="media-list">*/
/*                                 {% for learn in learns %}*/
/* */
/*                                     <li class="media">*/
/*                                         {{ web_macro.user_avatar(learn.user,'pull-left','media-objec',true) }}*/
/* */
/*                                         <div class="media-body">*/
/*                                             {{ web_macro.user_link(learn.user) }}*/
/*                                             {{ learn.message|raw }}*/
/*                                         </div>*/
/*                                     </li>*/
/* */
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {{ render(controller('TopxiaWebBundle:Default:latestReviewsBlock',{number:5})) }}*/
/* */
/*                 {# 最热话题 #}*/
/*                 {% if setting('group').group_show|default(1) %}*/
/*                     {% set hotThreads = data('HotThreads', {'count':11}) %}*/
/*                     {% if hotThreads %}*/
/*                         <div class="es-box hot-threads">*/
/*                             <div class="es-box-heading"><h2>最热话题</h2></div>*/
/*                             <div class="es-box-body">*/
/*                                 <ul class="text-list">*/
/*                                     {% for thread in hotThreads %}*/
/*                                         {% if thread %}*/
/*                                             <li style="border-bottom:none;background:url('{{ asset('assets/img/default/triangle.png') }}') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;">*/
/*                                                 <a href="{{ path('group_thread_show',{id:thread.groupId,threadId:thread.id}) }}">{{ thread.title|sub_text(15) }}</a>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% macro course_lists(courses) %}*/
/*     {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/*     {% set mode = mode|default('default') %}*/
/*     <ul class="course-wide-list">*/
/*         {% for course in courses %}*/
/*             <li class="course-item clearfix">*/
/*                 <a class="course-picture-link" href="{{ path('course_show', {id:course.id}) }}">*/
/*                     {{ lazy_img(filepath(course.middlePicture, 'course.png'), 'course-picture', '') }}*/
/*                 </a>*/
/* */
/*                 <div class="course-body">*/
/*                     <div class="course-price-info">*/
/*                         {% include "TopxiaWebBundle:Course:price-widget.html.twig" with {shows: ['price', 'discount']} %}*/
/*                     </div>*/
/*                     <h4 class="course-title"><a href="{{ path('course_show', {id:course.id}) }}">{{ course.title }}</a>*/
/*                         {% if course.serializeMode=='serialize' %}*/
/*                             <span class="label label-success ">更新中</span>*/
/*                         {% elseif course.serializeMode=='finished' %}*/
/*                             <span class="label label-warning ">已完结</span>*/
/*                         {% endif %}*/
/*                         {% if course.type == 'live' %}*/
/*                             {% set lesson = course['lesson']|default(null) %}*/
/*                             {% if lesson and "now"|date("U") >= lesson.startTime and "now"|date("U") <= lesson.endTime %}*/
/*                                 <span class="label label-warning series-mode-label">正在直播中</span>*/
/*                             {% else %}*/
/*                                 <span class="label label-success series-mode-label">直播</span>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </h4>*/
/* */
/*                     {% if course.type == 'live' %}*/
/*                         {% set lesson = course.lesson|default(null) %}*/
/*                         {% if lesson %}*/
/*                             <div class="live-course-lesson mbm">*/
/*                                 <span class="text-success fsm mrm">{{ lesson.startTime|date('n月j日 H:i') }}*/
/*                                     ~ {{ lesson.endTime|date('H:i') }}</span>*/
/*                                 <span class="text-muted fsm mrm">第{{ lesson.number }}课时</span>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         <div class="course-about ellipsis">{{ course.subtitle }}</div>*/
/*                     {% endif %}*/
/* */
/*                     <div class="course-footer clearfix">*/
/* */
/*                         {% set teacher = course.teachers|first|default(null) %}*/
/*                         {% if teacher %}*/
/*                             <div class="teacher">*/
/*                                 {{ web_macro.user_avatar(teacher,'pull-left','teacher-avatar') }}*/
/*                                 <a class="teacher-nickname ellipsis"*/
/*                                    href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*                                 <span class="teacher-title ellipsis">{{ teacher.title }}</span>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                         <div class="course-metas">*/
/*                             <span class="stars-{{ (course.rating)|number_format }}">&nbsp;</span>*/
/*                             {% if setting('course.show_student_num_enabled', '1') == 1 %}*/
/*                                 <span class="divider"></span>*/
/*                                 <span class="text-muted mrm mls"><strong>{{ course.studentNum }}</strong>{{ setting('default.user_name', '学员') }}</span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endmacro %}*/
