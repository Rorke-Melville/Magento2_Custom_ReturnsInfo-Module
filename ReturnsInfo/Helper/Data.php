<?php
/*
 *  Copyright (c) 2024 Gelmar (Pty) Ltd
 *
 *  Author: Rorke Melville
 *
 *  Released under the GNU General Public License
 */
namespace Gelmar\ReturnsInfo\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
/**
 * Class Data
 */
class Data extends AbstractHelper
{
    const XML_PATH_EXTENSION_ENABLED = 'returnsinfo/general/enabled';
    const XML_PATH_LABEL1 = 'returnsinfo/labels/label1';
    const XML_PATH_LABEL2 = 'returnsinfo/labels/label2';
    const XML_PATH_LABEL3 = 'returnsinfo/labels/label3';

    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        ScopeConfigInterface $scopeConfig 
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }
    //Check if module is enabled 
    public function isEnabled($storeId = null)
    {
        $isEnabled = $this->scopeConfig->isSetFlag(
            self::XML_PATH_EXTENSION_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
        $this->_logger->debug('ReturnsInfo Enabled: ' . ($isEnabled ? 'Yes' : 'No'));
        return $isEnabled;
    }
    //Fetch the label values
    public function getLabel1()
    {
        $default = 'Return Policy Info';
        $label = $this->scopeConfig->getValue(
            self::XML_PATH_LABEL1,
            ScopeInterface::SCOPE_STORE
        );
        return $label ? $label : $default;
    }

    public function getLabel2()
    {
        $default = 'Nationwide Shipping';
        $label = $this->scopeConfig->getValue(
            self::XML_PATH_LABEL2,
            ScopeInterface::SCOPE_STORE
        );
        return $label ? $label : $default;
    }

    public function getLabel3()
    {
        $default = 'Click-n-Collect';
        $label = $this->scopeConfig->getValue(
            self::XML_PATH_LABEL3,
            ScopeInterface::SCOPE_STORE
        );
        return $label ? $label : $default;
    }
}
