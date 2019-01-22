<?php
namespace Germania\Tracking;


interface TrackingInfoProviderInterface
{

    /**
     * @return TrackingInfoInterface
     */
    public function getTrackingInfo();

}
