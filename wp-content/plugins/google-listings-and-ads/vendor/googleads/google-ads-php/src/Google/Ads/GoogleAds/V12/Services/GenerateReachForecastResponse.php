<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message containing the generated reach curve.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.GenerateReachForecastResponse</code>
 */
class GenerateReachForecastResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Reference on target audiences for this curve.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.OnTargetAudienceMetrics on_target_audience_metrics = 1;</code>
     */
    protected $on_target_audience_metrics = null;
    /**
     * The generated reach curve for the planned product mix.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.ReachCurve reach_curve = 2;</code>
     */
    protected $reach_curve = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V12\Services\OnTargetAudienceMetrics $on_target_audience_metrics
     *           Reference on target audiences for this curve.
     *     @type \Google\Ads\GoogleAds\V12\Services\ReachCurve $reach_curve
     *           The generated reach curve for the planned product mix.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Reference on target audiences for this curve.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.OnTargetAudienceMetrics on_target_audience_metrics = 1;</code>
     * @return \Google\Ads\GoogleAds\V12\Services\OnTargetAudienceMetrics|null
     */
    public function getOnTargetAudienceMetrics()
    {
        return $this->on_target_audience_metrics;
    }

    public function hasOnTargetAudienceMetrics()
    {
        return isset($this->on_target_audience_metrics);
    }

    public function clearOnTargetAudienceMetrics()
    {
        unset($this->on_target_audience_metrics);
    }

    /**
     * Reference on target audiences for this curve.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.OnTargetAudienceMetrics on_target_audience_metrics = 1;</code>
     * @param \Google\Ads\GoogleAds\V12\Services\OnTargetAudienceMetrics $var
     * @return $this
     */
    public function setOnTargetAudienceMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Services\OnTargetAudienceMetrics::class);
        $this->on_target_audience_metrics = $var;

        return $this;
    }

    /**
     * The generated reach curve for the planned product mix.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.ReachCurve reach_curve = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Services\ReachCurve|null
     */
    public function getReachCurve()
    {
        return $this->reach_curve;
    }

    public function hasReachCurve()
    {
        return isset($this->reach_curve);
    }

    public function clearReachCurve()
    {
        unset($this->reach_curve);
    }

    /**
     * The generated reach curve for the planned product mix.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.services.ReachCurve reach_curve = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Services\ReachCurve $var
     * @return $this
     */
    public function setReachCurve($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Services\ReachCurve::class);
        $this->reach_curve = $var;

        return $this;
    }

}

