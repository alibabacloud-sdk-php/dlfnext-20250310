<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class GetRegionStatusResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $serviceRoleExists;

    /**
     * @example READY
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'serviceRoleExists' => 'serviceRoleExists',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceRoleExists) {
            $res['serviceRoleExists'] = $this->serviceRoleExists;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceRoleExists'])) {
            $model->serviceRoleExists = $map['serviceRoleExists'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
