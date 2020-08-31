<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V5\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying callout extension recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.ApplyRecommendationOperation.CalloutExtensionParameters</code>
 */
class CalloutExtensionParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Callout extensions to be added. This is a required field.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.CalloutFeedItem callout_extensions = 1;</code>
     */
    private $callout_extensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V5\Common\CalloutFeedItem[]|\Google\Protobuf\Internal\RepeatedField $callout_extensions
     *           Callout extensions to be added. This is a required field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Callout extensions to be added. This is a required field.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.CalloutFeedItem callout_extensions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCalloutExtensions()
    {
        return $this->callout_extensions;
    }

    /**
     * Callout extensions to be added. This is a required field.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.CalloutFeedItem callout_extensions = 1;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\CalloutFeedItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCalloutExtensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V5\Common\CalloutFeedItem::class);
        $this->callout_extensions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CalloutExtensionParameters::class, \Google\Ads\GoogleAds\V5\Services\ApplyRecommendationOperation_CalloutExtensionParameters::class);

