<?php
namespace Germania\Tracking;


trait TrackingInfoProviderTrait
{

    /**
     * @var TrackingInfoInterface
     */
    public $tracking_info;


    /**
     * @return TrackingInfoInterface
     */
    public function getTrackingInfo()
    {
        return $this->tracking_info;
    }

}
