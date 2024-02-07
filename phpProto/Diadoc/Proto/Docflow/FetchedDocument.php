<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowApi.proto

namespace Diadoc\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Docflow.FetchedDocument</code>
 */
class FetchedDocument extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow Document = 1;</code>
     */
    private $Document = null;
    /**
     * Generated from protobuf field <code>bytes IndexKey = 2;</code>
     */
    private $IndexKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Docflow\DocumentWithDocflow $Document
     *     @type string $IndexKey
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow Document = 1;</code>
     * @return \Diadoc\Proto\Docflow\DocumentWithDocflow
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow Document = 1;</code>
     * @param \Diadoc\Proto\Docflow\DocumentWithDocflow $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\DocumentWithDocflow::class);
        $this->Document = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 2;</code>
     * @return string
     */
    public function getIndexKey()
    {
        return $this->IndexKey;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->IndexKey = $var;

        return $this;
    }

}

