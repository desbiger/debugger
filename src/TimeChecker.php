<?php

namespace Desbiger;

class TimeChecker {

    public $startTime;
    public $point;

    static function init()
    {
        return new self();
    }

    /**
     * TimeChecker constructor.
     */
    public function __construct()
    {
        $this->startTime = $this->point = microtime(true);
    }


    /**
     * @param bool $with_before_point_interval
     */
    public function getNowInterval($with_before_point_interval = false)
    {

        $interval = (string)(microtime(true) - $this->startTime);
        if ($with_before_point_interval) {
            $interval .= " | before point interval : " . (string)(microtime(true) - $this->point);
        }

        $this->point = microtime(true);

        return $interval;
    }


}