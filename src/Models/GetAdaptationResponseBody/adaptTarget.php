<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationResponseBody;

use AlibabaCloud\Tea\Model;

class adaptTarget extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $bitRate;

    /**
     * @example 30
     *
     * @var int
     */
    public $frameRate;

    /**
     * @example 1080p
     *
     * @var string
     */
    public $resolution;

    /**
     * @example /example/example.exe
     *
     * @var string
     */
    public $startProgram;
    protected $_name = [
        'bitRate'      => 'BitRate',
        'frameRate'    => 'FrameRate',
        'resolution'   => 'Resolution',
        'startProgram' => 'StartProgram',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->startProgram) {
            $res['StartProgram'] = $this->startProgram;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adaptTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['StartProgram'])) {
            $model->startProgram = $map['StartProgram'];
        }

        return $model;
    }
}
