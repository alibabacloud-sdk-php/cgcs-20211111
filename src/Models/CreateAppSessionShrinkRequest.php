<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionShrinkRequest\startParameters;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionShrinkRequest\systemInfo;
use AlibabaCloud\Tea\Model;

class CreateAppSessionShrinkRequest extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 应用版本
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description 客户端ip
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description 自定义会话id
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @description 自定义用户id
     *
     * @var string
     */
    public $customUserId;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var bool
     */
    public $enablePostpaid;

    /**
     * @var string
     */
    public $resultStoreShrink;

    /**
     * @description 启动参数
     *
     * @var startParameters[]
     */
    public $startParameters;

    /**
     * @var string
     */
    public $startParametersV2Shrink;

    /**
     * @description 系统信息：如端侧机型等信息
     *
     * @var systemInfo[]
     */
    public $systemInfo;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'                   => 'AppId',
        'appVersion'              => 'AppVersion',
        'clientIp'                => 'ClientIp',
        'customSessionId'         => 'CustomSessionId',
        'customUserId'            => 'CustomUserId',
        'datasetId'               => 'DatasetId',
        'enablePostpaid'          => 'EnablePostpaid',
        'resultStoreShrink'       => 'ResultStore',
        'startParameters'         => 'StartParameters',
        'startParametersV2Shrink' => 'StartParametersV2',
        'systemInfo'              => 'SystemInfo',
        'timeout'                 => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->customUserId) {
            $res['CustomUserId'] = $this->customUserId;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->enablePostpaid) {
            $res['EnablePostpaid'] = $this->enablePostpaid;
        }
        if (null !== $this->resultStoreShrink) {
            $res['ResultStore'] = $this->resultStoreShrink;
        }
        if (null !== $this->startParameters) {
            $res['StartParameters'] = [];
            if (null !== $this->startParameters && \is_array($this->startParameters)) {
                $n = 0;
                foreach ($this->startParameters as $item) {
                    $res['StartParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startParametersV2Shrink) {
            $res['StartParametersV2'] = $this->startParametersV2Shrink;
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = [];
            if (null !== $this->systemInfo && \is_array($this->systemInfo)) {
                $n = 0;
                foreach ($this->systemInfo as $item) {
                    $res['SystemInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['CustomUserId'])) {
            $model->customUserId = $map['CustomUserId'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['EnablePostpaid'])) {
            $model->enablePostpaid = $map['EnablePostpaid'];
        }
        if (isset($map['ResultStore'])) {
            $model->resultStoreShrink = $map['ResultStore'];
        }
        if (isset($map['StartParameters'])) {
            if (!empty($map['StartParameters'])) {
                $model->startParameters = [];
                $n                      = 0;
                foreach ($map['StartParameters'] as $item) {
                    $model->startParameters[$n++] = null !== $item ? startParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartParametersV2'])) {
            $model->startParametersV2Shrink = $map['StartParametersV2'];
        }
        if (isset($map['SystemInfo'])) {
            if (!empty($map['SystemInfo'])) {
                $model->systemInfo = [];
                $n                 = 0;
                foreach ($map['SystemInfo'] as $item) {
                    $model->systemInfo[$n++] = null !== $item ? systemInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
