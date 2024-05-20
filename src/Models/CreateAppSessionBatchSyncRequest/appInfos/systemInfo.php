<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncRequest\appInfos;

use AlibabaCloud\Tea\Model;

class systemInfo extends Model
{
    /**
     * @example utdid
     *
     * @var string
     */
    public $key;

    /**
     * @example OE0usD+AP****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
