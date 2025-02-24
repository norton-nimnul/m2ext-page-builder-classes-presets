<?php
/**
 * Copyright © 2025 NortN. All rights reserved.
 */
declare (strict_types=1);

namespace NortN\PageBuilderClassPresets\Model\Config\Source;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Data\OptionSourceInterface;
use Magento\Store\Model\ScopeInterface;

class CssClassOptions implements OptionSourceInterface
{
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function toOptionArray()
    {
        $configPath = 'nortn_pagebuilder/class_presets/class_presets_list';
        $configValue = $this->scopeConfig->getValue($configPath, ScopeInterface::SCOPE_STORE);

        if (!$configValue) {
            return [];
        }

        $options = [];

        $placeholder = [
            'value' => '',
            'label' => __('--Select CSS Preset--'),
            'caption' => ''
        ];

        $values = json_decode($configValue, true);

        if (is_array($values)) {
            foreach ($values as $item) {
                if (!isset($item['key'], $item['value'])) {
                    continue;
                }

                $options[] = [
                    'value' => trim($item['value']),
                    'label' => trim($item['key']),
                    'caption' => isset($item['description']) ? trim($item['description']) : ''
                ];
            }
        }

        usort($options, function ($a, $b) {
            return strcasecmp($a['label'], $b['label']);
        });

        array_unshift($options, $placeholder);

        return $options;
    }
}
