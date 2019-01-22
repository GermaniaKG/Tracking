<?php
namespace Germania\Tracking;


trait TrackingInfoAwareTrait
{

    use TrackingInfoProviderTrait;

    /**
     * @param TrackingInfoInterface $tracking_info
     */
    public function setTrackingInfo( TrackingInfoInterface $tracking_info )
    {
        $this->tracking_info = $tracking_info;
        return $this;
    }


}
