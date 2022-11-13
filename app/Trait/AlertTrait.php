<?php

namespace App\Trait;


trait AlertTrait
{
    public function showToastr(string $title, string $type, string $message)
    {
        return $this->dispatchBrowserEvent(
            'showToastr',
            [
                'title' => $title,
                'type' => $type,
                'msg' => $message
            ]
        );
    }
}
