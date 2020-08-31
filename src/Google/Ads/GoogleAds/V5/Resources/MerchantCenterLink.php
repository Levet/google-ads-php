<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/merchant_center_link.proto

namespace Google\Ads\GoogleAds\V5\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A data sharing connection, proposed or in use,
 * between a Google Ads Customer and a Merchant Center account.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.resources.MerchantCenterLink</code>
 */
class MerchantCenterLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the merchant center link.
     * Merchant center link resource names have the form:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>string merchant_center_account_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $merchant_center_account_name = null;
    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the merchant center link.
     *           Merchant center link resource names have the form:
     *           `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *     @type int|string $id
     *           Output only. The ID of the Merchant Center account.
     *           This field is readonly.
     *     @type string $merchant_center_account_name
     *           Output only. The name of the Merchant Center account.
     *           This field is readonly.
     *     @type int $status
     *           The status of the link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Resources\MerchantCenterLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the merchant center link.
     * Merchant center link resource names have the form:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the merchant center link.
     * Merchant center link resource names have the form:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>string merchant_center_account_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMerchantCenterAccountName()
    {
        return isset($this->merchant_center_account_name) ? $this->merchant_center_account_name : '';
    }

    public function hasMerchantCenterAccountName()
    {
        return isset($this->merchant_center_account_name);
    }

    public function clearMerchantCenterAccountName()
    {
        unset($this->merchant_center_account_name);
    }

    /**
     * Output only. The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>string merchant_center_account_name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMerchantCenterAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->merchant_center_account_name = $var;

        return $this;
    }

    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\MerchantCenterLinkStatusEnum\MerchantCenterLinkStatus::class);
        $this->status = $var;

        return $this;
    }

}

