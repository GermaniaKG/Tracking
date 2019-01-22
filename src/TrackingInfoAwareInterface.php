<?php
namespace Germania\Tracking;


interface TrackingInfoAwareInterface extends TrackingInfoProviderInterface
{

    /**
     * @param TrackingInfoInterface $tracking_info
     */
    public function setTrackingInfo( TrackingInfoInterface $tracking_info );

}
