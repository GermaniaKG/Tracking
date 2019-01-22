<?php
namespace tests;

use Germania\Tracking\TrackingInfoInterface;
use Germania\Tracking\TrackingInfoAwareTrait;

class TrackingInfoAwareTraitTest extends \PHPUnit\Framework\TestCase
{
    public function testGetterAndSetter()
    {
        $sut_mock = $this->getMockForTrait( TrackingInfoAwareTrait::class );
        $this->assertEmpty( $sut_mock->getTrackingInfo());

        $tracking_info_mock = $this->prophesize( TrackingInfoInterface::class );
        $tracking_info = $tracking_info_mock->reveal();
        $sut_mock->setTrackingInfo($tracking_info);

        $this->assertInstanceOf(TrackingInfoInterface::class, $sut_mock->getTrackingInfo());
        $this->assertEquals( $tracking_info, $sut_mock->getTrackingInfo());
    }

}
