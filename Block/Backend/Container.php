<?php
/**
 * Copyright © 2016 Steve Robbins - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */

namespace Steverobbins\Redismanager\Block\Backend;

use Magento\Backend\Block\Widget\Grid\Container as WidgetContainer;

class Container extends WidgetContainer
{
    /**
     * Initialize object state with incoming parameters
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'redismanager';
        $this->_blockGroup = 'Steverobbins_Redismanager';
        $this->_headerText = __('Redis Management');
        parent::_construct();
        $this->buttonList->remove('add');
    }
}
