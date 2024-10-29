<?php
/*
 *  Copyright (c) 2024 Gelmar (Pty) Ltd
 *
 *  Author: Rorke Melville
 *
 *  Released under the GNU General Public License
 */
namespace Gelmar\ReturnsInfo\Block;

use Magento\Framework\View\Element\Template;
use Gelmar\ReturnsInfo\Helper\Data as ReturnsInfoHelper;

class ReturnsInfo extends Template
{
    protected $returnsInfoHelper;

    public function __construct(
        Template\Context $context,
        ReturnsInfoHelper $returnsInfoHelper,
        array $data = []
    ) {
        $this->returnsInfoHelper = $returnsInfoHelper;
        parent::__construct($context, $data);
    }

    public function isReturnsInfoEnabled()
    {
        return $this->returnsInfoHelper->isEnabled();
    }

    public function getLabel1()
    {
        return $this->returnsInfoHelper->getLabel1();
    }

    public function getLabel2()
    {
        return $this->returnsInfoHelper->getLabel2();
    }

    public function getLabel3()
    {
        return $this->returnsInfoHelper->getLabel3();
    }
}
