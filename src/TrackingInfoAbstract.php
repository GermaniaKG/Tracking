<?php
namespace Germania\Tracking;


abstract class TrackingInfoAbstract implements TrackingInfoInterface
{

    /**
     * Carrier's tracking ID (German: "Paketnummer")
     * @var string
     */
    public $tracking_id = "";


    /**
     * Carrier's tracking link (German: "Link zur Sendungsverfolgung")
     * @var string
     */
    public $tracking_link = "";



    /**
     * @inheritDoc
     */
    public function getTrackingID() : string
    {
        return $this->tracking_id;
    }


    /**
     * @inheritDoc
     */
    public function getTrackingLink() : string
    {
        return $this->tracking_link;
    }
}
