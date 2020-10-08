<?php

namespace Esputnik\Api;

use Esputnik\Model\Event as EventModel;
use Esputnik\Exception\RuntimeException;

class Event extends AbstractApi
{
    public function add(EventModel $event)
    {
        return $this->post('event/', $event);
    }
}
