<?php

$stdGroup = $package->dependencies['group']->Standard;
$stdGroup->hint = 'Standard Distribution';
$stdGroup->package['packages.zendframework.com/Zend_Authentication']->save();
$stdGroup->package['packages.zendframework.com/Zend_Barcode']->save();
$stdGroup->package['packages.zendframework.com/Zend_Cache']->save();
$stdGroup->package['packages.zendframework.com/Zend_Captcha']->save();
$stdGroup->package['packages.zendframework.com/Zend_Code']->save();
$stdGroup->package['packages.zendframework.com/Zend_Config']->save();
$stdGroup->package['packages.zendframework.com/Zend_Crypt']->save();
$stdGroup->package['packages.zendframework.com/Zend_Db']->save();
$stdGroup->package['packages.zendframework.com/Zend_Debug']->save();
$stdGroup->package['packages.zendframework.com/Zend_Di']->save();
$stdGroup->package['packages.zendframework.com/Zend_Dom']->save();
$stdGroup->package['packages.zendframework.com/Zend_Escaper']->save();
$stdGroup->package['packages.zendframework.com/Zend_EventManager']->save();
$stdGroup->package['packages.zendframework.com/Zend_Feed']->save();
$stdGroup->package['packages.zendframework.com/Zend_File']->save();
$stdGroup->package['packages.zendframework.com/Zend_Filter']->save();
$stdGroup->package['packages.zendframework.com/Zend_Form']->save();
$stdGroup->package['packages.zendframework.com/Zend_Http']->save();
$stdGroup->package['packages.zendframework.com/Zend_I18n']->save();
$stdGroup->package['packages.zendframework.com/Zend_InputFilter']->save();
$stdGroup->package['packages.zendframework.com/Zend_Json']->save();
$stdGroup->package['packages.zendframework.com/Zend_Ldap']->save();
$stdGroup->package['packages.zendframework.com/Zend_Loader']->save();
$stdGroup->package['packages.zendframework.com/Zend_Log']->save();
$stdGroup->package['packages.zendframework.com/Zend_Mail']->save();
$stdGroup->package['packages.zendframework.com/Zend_Math']->save();
$stdGroup->package['packages.zendframework.com/Zend_Memory']->save();
$stdGroup->package['packages.zendframework.com/Zend_Mime']->save();
$stdGroup->package['packages.zendframework.com/Zend_ModuleManager']->save();
$stdGroup->package['packages.zendframework.com/Zend_Mvc']->save();
$stdGroup->package['packages.zendframework.com/Zend_Navigation']->save();
$stdGroup->package['packages.zendframework.com/Zend_Paginator']->save();
$stdGroup->package['packages.zendframework.com/Zend_Permissions_Acl']->save();
$stdGroup->package['packages.zendframework.com/Zend_ProgressBar']->save();
$stdGroup->package['packages.zendframework.com/Zend_Serializer']->save();
$stdGroup->package['packages.zendframework.com/Zend_Server']->save();
$stdGroup->package['packages.zendframework.com/Zend_ServiceManager']->save();
$stdGroup->package['packages.zendframework.com/Zend_Session']->save();
$stdGroup->package['packages.zendframework.com/Zend_Soap']->save();
$stdGroup->package['packages.zendframework.com/Zend_Stdlib']->save();
$stdGroup->package['packages.zendframework.com/Zend_Tag']->save();
$stdGroup->package['packages.zendframework.com/Zend_Text']->save();
$stdGroup->package['packages.zendframework.com/Zend_Uri']->save();
$stdGroup->package['packages.zendframework.com/Zend_Validator']->save();
$stdGroup->package['packages.zendframework.com/Zend_Version']->save();
$stdGroup->package['packages.zendframework.com/Zend_View']->save();
$stdGroup->package['packages.zendframework.com/Zend_XmlRpc']->save();
$stdGroup->save();

$mvcGroup = $package->dependencies['group']->Mvc;
$mvcGroup->hint = 'Mvc Distribution';
$mvcGroup->package['packages.zendframework.com/Zend_Config']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Di']->save();
$mvcGroup->package['packages.zendframework.com/Zend_EventManager']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Http']->save();
$mvcGroup->package['packages.zendframework.com/Zend_I18n']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Loader']->save();
$mvcGroup->package['packages.zendframework.com/Zend_ModuleManager']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Mvc']->save();
$mvcGroup->package['packages.zendframework.com/Zend_ServiceManager']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Session']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Stdlib']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Uri']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Validator']->save();
$mvcGroup->package['packages.zendframework.com/Zend_Version']->save();
$mvcGroup->package['packages.zendframework.com/Zend_View']->save();
$mvcGroup->save();