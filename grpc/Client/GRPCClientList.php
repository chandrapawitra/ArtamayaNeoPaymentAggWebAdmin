<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: client.proto

namespace Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Client.GRPCClientList</code>
 */
class GRPCClientList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string clientid = 1;</code>
     */
    protected $clientid = '';
    /**
     * Generated from protobuf field <code>string clientname = 2;</code>
     */
    protected $clientname = '';
    /**
     * Generated from protobuf field <code>string clientaddress = 3;</code>
     */
    protected $clientaddress = '';
    /**
     * Generated from protobuf field <code>string clientregion = 4;</code>
     */
    protected $clientregion = '';
    /**
     * Generated from protobuf field <code>string clientcountryname = 5;</code>
     */
    protected $clientcountryname = '';
    /**
     * Generated from protobuf field <code>string clientemail = 6;</code>
     */
    protected $clientemail = '';
    /**
     * Generated from protobuf field <code>string clientphone = 7;</code>
     */
    protected $clientphone = '';
    /**
     * Generated from protobuf field <code>string clientcurrency = 8;</code>
     */
    protected $clientcurrency = '';
    /**
     * Generated from protobuf field <code>string picname = 9;</code>
     */
    protected $picname = '';
    /**
     * Generated from protobuf field <code>string picemail = 10;</code>
     */
    protected $picemail = '';
    /**
     * Generated from protobuf field <code>string picphone = 11;</code>
     */
    protected $picphone = '';
    /**
     * Generated from protobuf field <code>bool isactive = 12;</code>
     */
    protected $isactive = false;
    /**
     * Generated from protobuf field <code>bool isdelete = 13;</code>
     */
    protected $isdelete = false;
    /**
     * Generated from protobuf field <code>string createdate = 14;</code>
     */
    protected $createdate = '';
    /**
     * Generated from protobuf field <code>string updatedate = 15;</code>
     */
    protected $updatedate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $clientid
     *     @type string $clientname
     *     @type string $clientaddress
     *     @type string $clientregion
     *     @type string $clientcountryname
     *     @type string $clientemail
     *     @type string $clientphone
     *     @type string $clientcurrency
     *     @type string $picname
     *     @type string $picemail
     *     @type string $picphone
     *     @type bool $isactive
     *     @type bool $isdelete
     *     @type string $createdate
     *     @type string $updatedate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Client::initOnce();
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
     * Generated from protobuf field <code>string clientname = 2;</code>
     * @return string
     */
    public function getClientname()
    {
        return $this->clientname;
    }

    /**
     * Generated from protobuf field <code>string clientname = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClientname($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientaddress = 3;</code>
     * @return string
     */
    public function getClientaddress()
    {
        return $this->clientaddress;
    }

    /**
     * Generated from protobuf field <code>string clientaddress = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClientaddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientaddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientregion = 4;</code>
     * @return string
     */
    public function getClientregion()
    {
        return $this->clientregion;
    }

    /**
     * Generated from protobuf field <code>string clientregion = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClientregion($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientregion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientcountryname = 5;</code>
     * @return string
     */
    public function getClientcountryname()
    {
        return $this->clientcountryname;
    }

    /**
     * Generated from protobuf field <code>string clientcountryname = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setClientcountryname($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientcountryname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientemail = 6;</code>
     * @return string
     */
    public function getClientemail()
    {
        return $this->clientemail;
    }

    /**
     * Generated from protobuf field <code>string clientemail = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setClientemail($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientemail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientphone = 7;</code>
     * @return string
     */
    public function getClientphone()
    {
        return $this->clientphone;
    }

    /**
     * Generated from protobuf field <code>string clientphone = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setClientphone($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientphone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientcurrency = 8;</code>
     * @return string
     */
    public function getClientcurrency()
    {
        return $this->clientcurrency;
    }

    /**
     * Generated from protobuf field <code>string clientcurrency = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setClientcurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientcurrency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picname = 9;</code>
     * @return string
     */
    public function getPicname()
    {
        return $this->picname;
    }

    /**
     * Generated from protobuf field <code>string picname = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPicname($var)
    {
        GPBUtil::checkString($var, True);
        $this->picname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picemail = 10;</code>
     * @return string
     */
    public function getPicemail()
    {
        return $this->picemail;
    }

    /**
     * Generated from protobuf field <code>string picemail = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPicemail($var)
    {
        GPBUtil::checkString($var, True);
        $this->picemail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picphone = 11;</code>
     * @return string
     */
    public function getPicphone()
    {
        return $this->picphone;
    }

    /**
     * Generated from protobuf field <code>string picphone = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPicphone($var)
    {
        GPBUtil::checkString($var, True);
        $this->picphone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isactive = 12;</code>
     * @return bool
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Generated from protobuf field <code>bool isactive = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsactive($var)
    {
        GPBUtil::checkBool($var);
        $this->isactive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isdelete = 13;</code>
     * @return bool
     */
    public function getIsdelete()
    {
        return $this->isdelete;
    }

    /**
     * Generated from protobuf field <code>bool isdelete = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsdelete($var)
    {
        GPBUtil::checkBool($var);
        $this->isdelete = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string createdate = 14;</code>
     * @return string
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Generated from protobuf field <code>string createdate = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedate($var)
    {
        GPBUtil::checkString($var, True);
        $this->createdate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updatedate = 15;</code>
     * @return string
     */
    public function getUpdatedate()
    {
        return $this->updatedate;
    }

    /**
     * Generated from protobuf field <code>string updatedate = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedate($var)
    {
        GPBUtil::checkString($var, True);
        $this->updatedate = $var;

        return $this;
    }

}

