<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\AdaptCreateServiceRequest\adaptTarget;
use AlibabaCloud\Tea\Model;

class AdaptCreateServiceRequest extends Model
{
    /**
     * @var adaptTarget
     */
    public $adaptTarget;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $appVersionName;

    /**
     * @var string
     */
    public $requestApp;
    protected $_name = [
        'adaptTarget'    => 'AdaptTarget',
        'appVersionId'   => 'AppVersionId',
        'appVersionName' => 'AppVersionName',
        'requestApp'     => 'RequestApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptTarget) {
            $res['AdaptTarget'] = null !== $this->adaptTarget ? $this->adaptTarget->toMap() : null;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->requestApp) {
            $res['RequestApp'] = $this->requestApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdaptCreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptTarget'])) {
            $model->adaptTarget = adaptTarget::fromMap($map['AdaptTarget']);
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['RequestApp'])) {
            $model->requestApp = $map['RequestApp'];
        }

        return $model;
    }
}
