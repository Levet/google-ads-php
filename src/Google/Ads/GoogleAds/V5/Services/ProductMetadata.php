<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The metadata associated with an available plannable product.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.ProductMetadata</code>
 */
class ProductMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The code associated with the ad product. E.g. Trueview, Bumper
     * To list the available plannable product codes use ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     */
    protected $plannable_product_code = null;
    /**
     * The allowed plannable targeting for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.services.PlannableTargeting plannable_targeting = 2;</code>
     */
    protected $plannable_targeting = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $plannable_product_code
     *           The code associated with the ad product. E.g. Trueview, Bumper
     *           To list the available plannable product codes use ListPlannableProducts.
     *     @type \Google\Ads\GoogleAds\V5\Services\PlannableTargeting $plannable_targeting
     *           The allowed plannable targeting for this product.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The code associated with the ad product. E.g. Trueview, Bumper
     * To list the available plannable product codes use ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPlannableProductCode()
    {
        return isset($this->plannable_product_code) ? $this->plannable_product_code : null;
    }

    public function hasPlannableProductCode()
    {
        return isset($this->plannable_product_code);
    }

    public function clearPlannableProductCode()
    {
        unset($this->plannable_product_code);
    }

    /**
     * Returns the unboxed value from <code>getPlannableProductCode()</code>

     * The code associated with the ad product. E.g. Trueview, Bumper
     * To list the available plannable product codes use ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @return string|null
     */
    public function getPlannableProductCodeUnwrapped()
    {
        return $this->readWrapperValue("plannable_product_code");
    }

    /**
     * The code associated with the ad product. E.g. Trueview, Bumper
     * To list the available plannable product codes use ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPlannableProductCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->plannable_product_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The code associated with the ad product. E.g. Trueview, Bumper
     * To list the available plannable product codes use ListPlannableProducts.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue plannable_product_code = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPlannableProductCodeUnwrapped($var)
    {
        $this->writeWrapperValue("plannable_product_code", $var);
        return $this;}

    /**
     * The allowed plannable targeting for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.services.PlannableTargeting plannable_targeting = 2;</code>
     * @return \Google\Ads\GoogleAds\V5\Services\PlannableTargeting
     */
    public function getPlannableTargeting()
    {
        return isset($this->plannable_targeting) ? $this->plannable_targeting : null;
    }

    public function hasPlannableTargeting()
    {
        return isset($this->plannable_targeting);
    }

    public function clearPlannableTargeting()
    {
        unset($this->plannable_targeting);
    }

    /**
     * The allowed plannable targeting for this product.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.services.PlannableTargeting plannable_targeting = 2;</code>
     * @param \Google\Ads\GoogleAds\V5\Services\PlannableTargeting $var
     * @return $this
     */
    public function setPlannableTargeting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Services\PlannableTargeting::class);
        $this->plannable_targeting = $var;

        return $this;
    }

}

