<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 25/01/2019
 * Time: 14:49
 */

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date('h:i:s');
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    public function startTime()
    {
        $this->startTime = date('h:i:s');
    }

    public function stopTime()
    {
        $this->endTime = date('h:i:s');
    }

    public function getElapsedTime()
    {
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}