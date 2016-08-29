<?php
namespace Topxia\Service\Importer;

use Topxia\Service\Importer\ImporterProcessor;

class ImporterProcessorFactory
{

	public static function create($target)
    {
        //sa:增加一个admin
    	if(empty($target) || !in_array($target,array('classroom','course','admin'))) {
    		throw new Exception("用户导入类型不存在");
    	}

    	$class = __NAMESPACE__ . '\\' . ucfirst($target). 'UserImporterProcessor';

    	return new $class();
    }

}


