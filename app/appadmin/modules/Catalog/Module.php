<?php
namespace fecshop\app\appadmin\modules\Catalog;
use Yii;
class Module extends \fec\AdminModule
{
    public function init()
    {
		
		# ���´������ָ��
        $this->controllerNamespace 	= 	__NAMESPACE__ . '\\controllers';
		$this->_currentDir			= 	__DIR__ ;
		$this->_currentNameSpace	=   __NAMESPACE__;
		
		# ָ��Ĭ�ϵ�man�ļ�
		$this->layout = "/main_ajax.php";
		parent::init();  
		
    }
}