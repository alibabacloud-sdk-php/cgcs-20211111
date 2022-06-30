<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\RefreshDistrictMetaResponseBody;

use AlibabaCloud\SDK\CGCS\V20211111\Models\RefreshDistrictMetaResponseBody\data\projectQuotaLimit;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 业务处理结果Code
     *
     * @var string
     */
    public $code;

    /**
     * @description 业务对象
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description 业务处理消息摘要
     *
     * @var string
     */
    public $message;

    /**
     * @var projectQuotaLimit
     */
    public $projectQuotaLimit;

    /**
     * @description 操作请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 业务处理是否成功
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'data'              => 'Data',
        'message'           => 'Message',
        'projectQuotaLimit' => 'ProjectQuotaLimit',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->projectQuotaLimit) {
            $res['ProjectQuotaLimit'] = null !== $this->projectQuotaLimit ? $this->projectQuotaLimit->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProjectQuotaLimit'])) {
            $model->projectQuotaLimit = projectQuotaLimit::fromMap($map['ProjectQuotaLimit']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
