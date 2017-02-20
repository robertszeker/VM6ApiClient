<?php

namespace MovingImage\Client\VM6\Interfaces;

use MovingImage\Client\VM6\Criteria\VideoQueryCriteria;
use MovingImage\Client\VM6\Entity\Video;

/**
 * Interface ApiClientInterface.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface ApiClientInterface
{
    /**
     * @const Version indicator to determine compatibility.
     */
    const VERSION = '0.1.0';

    /**
     * @param VideoQueryCriteria $criteria
     *
     * @return Video[]
     */
    public function getVideos(VideoQueryCriteria $criteria);
}