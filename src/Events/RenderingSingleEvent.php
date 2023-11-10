<?php

namespace Admingate\Theme\Events;

use Admingate\Base\Events\Event;
use Admingate\Slug\Models\Slug;
use Illuminate\Queue\SerializesModels;

class RenderingSingleEvent extends Event
{
    use SerializesModels;

    public Slug $slug;

    public function __construct(Slug $slug)
    {
        $this->slug = $slug;
    }
}
