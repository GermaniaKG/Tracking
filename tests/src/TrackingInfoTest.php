<?php
namespace tests;

use Germania\Tracking\TrackingInfo;


use Prophecy\Argument;

class TrackingInfoTest extends \PHPUnit\Framework\TestCase
{


    /**
     * @dataProvider provideTrackingInfoData
     */
    public function testInterceptors( $id, $link)
    {
        $sut = new TrackingInfo;

        $this->assertEmpty( $sut->getTrackingID() );
        $this->assertEmpty( $sut->getTrackingLink() );

        $sut->setTrackingID( $id );
        $this->assertEquals( $id, $sut->getTrackingID() );

        $sut->setTrackingLink( $link );
        $this->assertEquals( $link, $sut->getTrackingLink() );
    }


    /**
     * @dataProvider provideTrackingInfoData
     */
    public function testFluentInterface( $id, $link)
    {
        $sut = new TrackingInfo;

        $fluent = $sut->setTrackingID( $id );
        $this->assertInstanceOf( TrackingInfo::class, $fluent );

        $fluent = $sut->setTrackingLink( $link );
        $this->assertInstanceOf( TrackingInfo::class, $fluent );
    }


    /**
     * @dataProvider provideTrackingInfoData
     */
    public function testJsonSerialize( $id, $link)
    {
        $sut = new TrackingInfo;

        $sut->setTrackingID( $id );
        $sut->setTrackingLink( $link );

        $json_array = $sut->jsonSerialize();
        $this->assertArrayHasKey("id", $json_array);
        $this->assertEquals( $id, $json_array['id']);

        $this->assertArrayHasKey("href", $json_array);
        $this->assertEquals( $link, $json_array['href']);
    }


    public function provideTrackingInfoData()
    {
        return array(
            [ 'foo', 'bar']
        );
    }

}
