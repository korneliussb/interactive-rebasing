<?php
class Job
{
    protected $title;
    public function worksAt($title)
    {
        $this->title =  new Job($title);
    }

    public function title()
    {
        return $this->title;
    }
}
