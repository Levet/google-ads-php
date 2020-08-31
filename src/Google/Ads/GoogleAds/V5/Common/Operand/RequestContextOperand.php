<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/matching_function.proto

namespace Google\Ads\GoogleAds\V5\Common\Operand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An operand in a function referring to a value in the request context.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.Operand.RequestContextOperand</code>
 */
class RequestContextOperand extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of value to be referred in the request context.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextType context_type = 1;</code>
     */
    protected $context_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $context_type
     *           Type of value to be referred in the request context.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of value to be referred in the request context.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextType context_type = 1;</code>
     * @return int
     */
    public function getContextType()
    {
        return $this->context_type;
    }

    /**
     * Type of value to be referred in the request context.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextType context_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setContextType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\MatchingFunctionContextTypeEnum\MatchingFunctionContextType::class);
        $this->context_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestContextOperand::class, \Google\Ads\GoogleAds\V5\Common\Operand_RequestContextOperand::class);

