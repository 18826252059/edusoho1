<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    2 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    3 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    4 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    5 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    6 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    7 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    8 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    9 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    10 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    11 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    12 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    13 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
);