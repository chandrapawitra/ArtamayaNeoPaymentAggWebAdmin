<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: adminauth.proto

namespace XXX;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>XXX.AdminRegisterAdminRequest</code>
 */
class AdminRegisterAdminRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string password01 = 2;</code>
     */
    protected $password01 = '';
    /**
     * Generated from protobuf field <code>string password02 = 3;</code>
     */
    protected $password02 = '';
    /**
     * Generated from protobuf field <code>string fullname = 4;</code>
     */
    protected $fullname = '';
    /**
     * Generated from protobuf field <code>string birthdate = 5;</code>
     */
    protected $birthdate = '';
    /**
     * Generated from protobuf field <code>string gender = 6;</code>
     */
    protected $gender = '';
    /**
     * Generated from protobuf field <code>string address = 7;</code>
     */
    protected $address = '';
    /**
     * Generated from protobuf field <code>string city = 8;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string region = 9;</code>
     */
    protected $region = '';
    /**
     * Generated from protobuf field <code>string country = 10;</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string phonenumber = 11;</code>
     */
    protected $phonenumber = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *     @type string $password01
     *     @type string $password02
     *     @type string $fullname
     *     @type string $birthdate
     *     @type string $gender
     *     @type string $address
     *     @type string $city
     *     @type string $region
     *     @type string $country
     *     @type string $phonenumber
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
     * Generated from protobuf field <code>string password01 = 2;</code>
     * @return string
     */
    public function getPassword01()
    {
        return $this->password01;
    }

    /**
     * Generated from protobuf field <code>string password01 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword01($var)
    {
        GPBUtil::checkString($var, True);
        $this->password01 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password02 = 3;</code>
     * @return string
     */
    public function getPassword02()
    {
        return $this->password02;
    }

    /**
     * Generated from protobuf field <code>string password02 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword02($var)
    {
        GPBUtil::checkString($var, True);
        $this->password02 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fullname = 4;</code>
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Generated from protobuf field <code>string fullname = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFullname($var)
    {
        GPBUtil::checkString($var, True);
        $this->fullname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string birthdate = 5;</code>
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Generated from protobuf field <code>string birthdate = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBirthdate($var)
    {
        GPBUtil::checkString($var, True);
        $this->birthdate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gender = 6;</code>
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>string gender = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkString($var, True);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string address = 7;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 8;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string region = 9;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Generated from protobuf field <code>string region = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 10;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phonenumber = 11;</code>
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Generated from protobuf field <code>string phonenumber = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPhonenumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phonenumber = $var;

        return $this;
    }

}

