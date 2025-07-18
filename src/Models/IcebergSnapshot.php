<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class IcebergSnapshot extends Model
{
    /**
     * @var int
     */
    public $addedRows;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var int
     */
    public $schemaId;

    /**
     * @var int
     */
    public $sequenceNumber;

    /**
     * @var string[]
     */
    public $summary;

    /**
     * @var int
     */
    public $timestampMillis;
    protected $_name = [
        'addedRows' => 'addedRows',
        'id' => 'id',
        'operation' => 'operation',
        'parentId' => 'parentId',
        'schemaId' => 'schemaId',
        'sequenceNumber' => 'sequenceNumber',
        'summary' => 'summary',
        'timestampMillis' => 'timestampMillis',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedRows) {
            $res['addedRows'] = $this->addedRows;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->schemaId) {
            $res['schemaId'] = $this->schemaId;
        }
        if (null !== $this->sequenceNumber) {
            $res['sequenceNumber'] = $this->sequenceNumber;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->timestampMillis) {
            $res['timestampMillis'] = $this->timestampMillis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IcebergSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addedRows'])) {
            $model->addedRows = $map['addedRows'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['schemaId'])) {
            $model->schemaId = $map['schemaId'];
        }
        if (isset($map['sequenceNumber'])) {
            $model->sequenceNumber = $map['sequenceNumber'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['timestampMillis'])) {
            $model->timestampMillis = $map['timestampMillis'];
        }

        return $model;
    }
}
