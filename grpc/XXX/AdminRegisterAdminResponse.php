<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: adminauth.proto

namespace XXX;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>XXX.AdminRegisterAdminResponse</code>
 */
class AdminRegisterAdminResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string status = 2;</code>
     */
    protected $status = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *     @type string $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Adminauth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 2;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

