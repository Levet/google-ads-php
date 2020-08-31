<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/user_data_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [UserDataService.UploadUserData][google.ads.googleads.v5.services.UserDataService.UploadUserData]
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.UploadUserDataRequest</code>
 */
class UploadUserDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer for which to update the user data.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.services.UserDataOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $operations;
    protected $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer for which to update the user data.
     *     @type \Google\Ads\GoogleAds\V5\Services\UserDataOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           Required. The list of operations to be done.
     *     @type \Google\Ads\GoogleAds\V5\Common\CustomerMatchUserListMetadata $customer_match_user_list_metadata
     *           Metadata for data updates to a Customer Match user list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\UserDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer for which to update the user data.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer for which to update the user data.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.services.UserDataOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.services.UserDataOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V5\Services\UserDataOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V5\Services\UserDataOperation::class);
        $this->operations = $arr;

        return $this;
    }

    /**
     * Metadata for data updates to a Customer Match user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.CustomerMatchUserListMetadata customer_match_user_list_metadata = 2;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\CustomerMatchUserListMetadata
     */
    public function getCustomerMatchUserListMetadata()
    {
        return $this->readOneof(2);
    }

    public function hasCustomerMatchUserListMetadata()
    {
        return $this->hasOneof(2);
    }

    /**
     * Metadata for data updates to a Customer Match user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.CustomerMatchUserListMetadata customer_match_user_list_metadata = 2;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\CustomerMatchUserListMetadata $var
     * @return $this
     */
    public function setCustomerMatchUserListMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\CustomerMatchUserListMetadata::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->whichOneof("metadata");
    }

}

