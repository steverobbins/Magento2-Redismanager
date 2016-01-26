<?php
/**
 * Copyright © 2016 Steve Robbins - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */

namespace Steverobbins\Redismanager\Controller\Adminhtml;

abstract class Index extends \Magento\Backend\App\Action
{
    /**
     * Check ACL permissions
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        switch ($this->_request->getActionName()) {
            case 'index':
                return $this->_authorization->isAllowed('Steverobbins_Redismanager::index');
            case 'flush':
                return $this->_authorization->isAllowed('Steverobbins_Redismanager::flush');
        }
        return false;
    }
}
