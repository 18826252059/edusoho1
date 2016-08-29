<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/23
 * Time: 15:44
 */

namespace Custom\WebBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\CourseBaseController;

class CommentController extends CourseBaseController
{
    public function listAction(Request $request, $courseId)
    {
        list($course, $member) = $this->buildCourseLayoutData($request, $courseId);

        $paginator = new Paginator(
            $this->get('request'),
            $this->getReviewService()->getCourseReviewCount($courseId)
            , 10000
        );

        $reviews = $this->getReviewService()->findCourseReviews(
            $courseId,
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        $rating = 0;
        if (count($reviews) > 0)
        {
            foreach ($reviews as $v)
            {
                $rating += $v['rating'];
            }
            $rating = ceil($rating / count($reviews));
        }

        $user = $this->getCurrentUser();
        $userReview = $user->isLogin() ? $this->getReviewService()->getUserCourseReview($user['id'], $course['id']) : null;

        $users = $this->getUserService()->findUsersByIds(ArrayToolkit::column($reviews, 'userId'));

        return $this->render('CustomWebBundle:Course:comment.html.twig', array(
            'course' => $course,
            'member' => $member,
            'reviewSaveUrl' => $this->generateUrl('course_review_create', array('id' => $course['id'])),
            'userReview' => $userReview,
            'reviews' => $reviews,
            'users' => $users,
            'paginator' => $paginator,
            'rating' => $rating
        ));
    }

    public function createAction($courseId)
    {
        return $this->render('CustomWebBundle:Course:comment-create.html.twig', array('courseId' => $courseId));
    }


    protected function getReviewService()
    {
        return $this->getServiceKernel()->createService('Course.ReviewService');
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }

}