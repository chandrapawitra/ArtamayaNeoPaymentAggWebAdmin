<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: userapi.proto

namespace UserAPI;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>UserAPI.GRPCCreateUserAPIRequest</code>
 */
class GRPCCreateUserAPIRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string requestemail = 1;</code>
     */
    protected $requestemail = '';
    /**
     * Generated from protobuf field <code>string requestsessionid = 2;</code>
     */
    protected $requestsessionid = '';
    /**
     * Generated from protobuf field <code>string requestremoteipaddress = 3;</code>
     */
    protected $requestremoteipaddress = '';
    /**
     * Generated from protobuf field <code>string clientid = 4;</code>
     */
    protected $clientid = '';
    /**
     * Generated from protobuf field <code>string username = 5;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>string password = 6;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>string remoteipaddress = 7;</code>
     */
    protected $remoteipaddress = '';
    /**
     * Generated from protobuf field <code>string apiaccess = 8;</code>
     */
    protected $apiaccess = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $requestemail
     *     @type string $requestsessionid
     *     @type string $requestremoteipaddress
     *     @type string $clientid
     *     @type string $username
     *     @type string $password
     *     @type string $remoteipaddress
     *     @type string $apiaccess
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Userapi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string requestemail = 1;</code>
     * @return string
     */
    public function getRequestemail()
    {
        return $this->requestemail;
    }

    /**
     * Generated from protobuf field <code>string requestemail = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestemail($var)
    {
        GPBUtil::checkString($var, True);
        $this->requestemail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string requestsessionid = 2;</code>
     * @return string
     */
    public function getRequestsessionid()
    {
        return $this->requestsessionid;
    }

    /**
     * Generated from protobuf field <code>string requestsessionid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestsessionid($var)
    {
        GPBUtil::checkString($var, True);
        $this->requestsessionid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string requestremoteipaddress = 3;</code>
     * @return string
     */
    public function getRequestremoteipaddress()
    {
        return $this->requestremoteipaddress;
    }

    /**
     * Generated from protobuf field <code>string requestremoteipaddress = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestremoteipaddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->requestremoteipaddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientid = 4;</code>
     * @return string
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Generated from protobuf field <code>string clientid = 4;</code>
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
     * Generated from protobuf field <code>string username = 5;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 6;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remoteipaddress = 7;</code>
     * @return string
     */
    public function getRemoteipaddress()
    {
        return $this->remoteipaddress;
    }

    /**
     * Generated from protobuf field <code>string remoteipaddress = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteipaddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->remoteipaddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string apiaccess = 8;</code>
     * @return string
     */
    public function getApiaccess()
    {
        return $this->apiaccess;
    }

    /**
     * Generated from protobuf field <code>string apiaccess = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setApiaccess($var)
    {
        GPBUtil::checkString($var, True);
        $this->apiaccess = $var;

        return $this;
    }

}

