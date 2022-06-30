<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\RefreshDistrictMetaResponseBody\data;

use AlibabaCloud\SDK\CGCS\V20211111\Models\DataProjectQuotaLimitDistrictLimitMapValue;
use AlibabaCloud\Tea\Model;

class projectQuotaLimit extends Model
{
    /**
     * @description key - districtId
     *
     * @var DataProjectQuotaLimitDistrictLimitMapValue[]
     */
    public $districtLimitMap;

    /**
     * @description 限制类型 ：目前默认 - ReserveContainer
     *
     * @var string
     */
    public $limitType;
    protected $_name = [
        'districtLimitMap' => 'DistrictLimitMap',
        'limitType'        => 'LimitType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->districtLimitMap) {
            $res['DistrictLimitMap'] = [];
            if (null !== $this->districtLimitMap && \is_array($this->districtLimitMap)) {
                foreach ($this->districtLimitMap as $key => $val) {
                    $res['DistrictLimitMap'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectQuotaLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistrictLimitMap'])) {
            $model->districtLimitMap = $map['DistrictLimitMap'];
        }
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        return $model;
    }
}
