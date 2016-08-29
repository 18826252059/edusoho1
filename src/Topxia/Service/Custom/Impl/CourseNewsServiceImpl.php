<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:10
 */

namespace Topxia\Service\Custom\Impl;


use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Custom\CourseNewsService;

class CourseNewsServiceImpl extends BaseService implements CourseNewsService
{

    public function addNewsByCourseId($data)
    {
        $news = ArrayToolkit::parts($data, array('courseId', 'articleTitle', 'pictureList', 'articleId', 'pubDate', 'originalUrl','sourceName','articleType'));
        if (isset($news['pictureList']))
        {
            $news['pictureList'] = json_encode($news['pictureList']);
        }
        $news['createTime'] = date('Y-m-d H:i:s');
        $courseNews = $this->findNewsByCourseId($news['courseId']);
        $courseNewsIds = ArrayToolkit::column($courseNews, 'articleId');
        if (in_array($news['articleId'], $courseNewsIds))
        {
            return 0;
        }

        return $this->getCourseNewsDao()->addNewsByCourseId($news);
    }

    public function deleteNewsByCourseId($id)
    {
        return $this->getCourseNewsDao()->deleteNewsByCourseId($id);
    }

    public function findNewsByCourseId($courseId)
    {
        return $this->getCourseNewsDao()->findNewsByCourseId($courseId);
    }

    protected function getCourseNewsDao()
    {
        return $this->createDao('Custom.CourseNewsDao');
    }
}