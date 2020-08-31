<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/campaign_experiment_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CampaignExperimentService.EndCampaignExperiment][google.ads.googleads.v5.services.CampaignExperimentService.EndCampaignExperiment].
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.EndCampaignExperimentRequest</code>
 */
class EndCampaignExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the campaign experiment to end.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $campaign_experiment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_experiment
     *           Required. The resource name of the campaign experiment to end.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\CampaignExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the campaign experiment to end.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCampaignExperiment()
    {
        return $this->campaign_experiment;
    }

    /**
     * Required. The resource name of the campaign experiment to end.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_experiment = $var;

        return $this;
    }

}

