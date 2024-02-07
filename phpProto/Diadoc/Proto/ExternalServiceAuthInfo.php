<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ExternalServiceAuthInfo.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.ExternalServiceAuthInfo</code>
 */
class ExternalServiceAuthInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ServiceUserId = 1;</code>
     */
    private $ServiceUserId = '';
    /**
     * Generated from protobuf field <code>string Thumbprint = 2;</code>
     */
    private $Thumbprint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ServiceUserId
     *     @type string $Thumbprint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ExternalServiceAuthInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ServiceUserId = 1;</code>
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->ServiceUserId;
    }

    /**
     * Generated from protobuf field <code>string ServiceUserId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ServiceUserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Thumbprint = 2;</code>
     * @return string
     */
    public function getThumbprint()
    {
        return $this->Thumbprint;
    }

    /**
     * Generated from protobuf field <code>string Thumbprint = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->Thumbprint = $var;

        return $this;
    }

}

