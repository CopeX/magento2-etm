<?php

namespace Ainnomix\EntityTypeManager\Block\Adminhtml\Entity\Type\Edit\Button;

class Delete extends Generic
{

    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->getEntityTypeId()) {
            $data = [
                'label' => __('Delete Entity Type'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                        'Are you sure you want to do this?'
                    ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 20,
            ];
        }
        return $data;
    }

    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('*/*/delete', ['entity_type_id' => $this->getEntityTypeId()]);
    }
}
