<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: AsyncMethodResult.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.AsyncMethodResult</code>
 */
class AsyncMethodResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string TaskId = 1;</code>
     */
    private $TaskId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TaskId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AsyncMethodResult::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string TaskId = 1;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->TaskId;
    }

    /**
     * Generated from protobuf field <code>string TaskId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskId = $var;

        return $this;
    }

}

