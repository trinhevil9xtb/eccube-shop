<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Admin\ProductClassEditType' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractType.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Form\\Type\\Admin\\ProductClassEditType.php';

return $this->services['Eccube\\Form\\Type\\Admin\\ProductClassEditType'] = new \Eccube\Form\Type\Admin\ProductClassEditType(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\BaseInfoRepository']) ? $this->services['Eccube\\Repository\\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'});
