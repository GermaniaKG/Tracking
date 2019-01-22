<?php
namespace Germania\Tracking;


interface TrackingInfoInterface
{

    /**
     * Returns the carrier's tracking ID (German: "Paketnummer")
     * @return string
     */
    public function getTrackingID() : string;


    /**
     * Returns the carrier's tracking link (German: "Sendungsverfolgung")
     * @return string
     */
    public function getTrackingLink() : string;
}
