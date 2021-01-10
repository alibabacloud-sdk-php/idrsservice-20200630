<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetDetectProcessResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $draft;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $newVersion;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'draft'      => 'Draft',
        'createdAt'  => 'CreatedAt',
        'md5'        => 'Md5',
        'updatedAt'  => 'UpdatedAt',
        'name'       => 'Name',
        'newVersion' => 'NewVersion',
        'content'    => 'Content',
        'id'         => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->draft) {
            $res['Draft'] = $this->draft;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newVersion) {
            $res['NewVersion'] = $this->newVersion;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Draft'])) {
            $model->draft = $map['Draft'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewVersion'])) {
            $model->newVersion = $map['NewVersion'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
