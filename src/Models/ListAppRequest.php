<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ListAppRequest extends Model
{
    /**
     * @var string
     */
    public $keySearch;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'keySearch'  => 'KeySearch',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keySearch) {
            $res['KeySearch'] = $this->keySearch;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeySearch'])) {
            $model->keySearch = $map['KeySearch'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
