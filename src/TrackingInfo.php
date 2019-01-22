<?php
namespace Germania\Tracking;


class TrackingInfo extends TrackingInfoAbstract implements TrackingInfoInterface, \JsonSerializable
{

    /**
     * Sets the carrier's tracking ID.
     *
     * @param string $tracking_id
     */
    public function setTrackingID ( string $tracking_id )
    {
        $this->tracking_id = $tracking_id;
        return $this;
    }


    /**
     * Sets the link to the carrier's shipment tracker.
     *
     * @param string $tracking_link
     */
    public function setTrackingLink ( string $tracking_link )
    {
        $this->tracking_link = $tracking_link;
        return $this;
    }


    /**
     * Returns an array with tracking ID and link, using keys 'id' and 'href'.
     *
     * @inheritDoc
     * @return array
     */
    public function jsonSerialize()
    {
        return array(
            'id'   => $this->getTrackingID(),
            'href' => $this->getTrackingLink()
        );
    }

}
