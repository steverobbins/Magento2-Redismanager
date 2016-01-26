<?php
/**
 * Copyright © 2016 Steve Robbins - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */

namespace Steverobbins\Redismanager\Controller\Adminhtml\Index;

use Steverobbins\Redismanager\Controller\Adminhtml\Index as IndexAbstract;

class Index extends IndexAbstract
{
    /**
     * Display processes grid action
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Steverobbins_Redismanager::system_redis');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Redis Management'));
        $this->_view->renderLayout();
    }
}
