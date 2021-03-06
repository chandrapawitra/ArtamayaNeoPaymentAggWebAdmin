<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: webuser.proto

namespace WebUser;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>WebUser.GRPCUpdateWebUserResponse</code>
 */
class GRPCUpdateWebUserResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string clientid = 1;</code>
     */
    protected $clientid = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string email = 3;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string privilege = 4;</code>
     */
    protected $privilege = '';
    /**
     * Generated from protobuf field <code>string status = 5;</code>
     */
    protected $status = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $clientid
     *     @type string $name
     *     @type string $email
     *     @type string $privilege
     *     @type string $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Webuser::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string clientid = 1;</code>
     * @return string
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Generated from protobuf field <code>string clientid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClientid($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 3;</code>
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
     * Generated from protobuf field <code>string privilege = 4;</code>
     * @return string
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * Generated from protobuf field <code>string privilege = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivilege($var)
    {
        GPBUtil::checkString($var, True);
        $this->privilege = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 5;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 5;</code>
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

