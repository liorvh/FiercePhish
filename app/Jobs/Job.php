<?php

namespace App\Jobs;

use Cache;
use Illuminate\Contracts\Queue\ShouldQueue;

class Job implements ShouldQueue
{
    public $uid;
    public $title;
    public $description;
    public $icon;
    
    public function __construct($meta)
    {
        $this->title = $meta['title'];
        $this->description = $meta['description'];
        $this->icon = $meta['icon'];
        $this->uid = 'job_'.rand();
        Cache::forever($this->uid, 0);
    }
    
    public function setProgress($num)
    {
        Cache::forever($this->uid, $num);
    }
    
    public function getProgress()
    {
        if (Cache::has($this->uid)) {
            return Cache::get($this->uid);
        }
        Cache::forever($this->uid, 0);
        
        return 0;
    }
    
    public function cleanup()
    {
        Cache::forget($this->uid);
    }
}
