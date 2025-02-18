<?php
/**
 * Copyright © 2025 NortN. All rights reserved.
 */
declare (strict_types=1);

namespace NortN\PageBuilderClassPresets\Block\Adminhtml\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\DataObject;
use Magento\Framework\Exception\LocalizedException;

/**
 * Options
 */
class Options extends AbstractFieldArray
{
    /**
     * Prepare rendering the new field by adding all the needed columns
     */
    protected function _prepareToRender()
    {
        $this->addColumn('key', ['label' => __('Label'), 'class' => 'required-entry']);
        $this->addColumn('value', ['label' => __('Value'), 'class' => 'required-entry']);
        $this->addColumn('description', ['label' => __('Description')]);

        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }

    /**
     * Prepare existing row data object
     *
     * @param DataObject $row
     * @throws LocalizedException
     */
    protected function _prepareArrayRow(DataObject $row): void
    {
        $row->setData('option_extra_attrs', []);
    }
}
