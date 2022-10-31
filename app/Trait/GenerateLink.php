<?php

namespace App\Trait;

use App\Models\Link;
use App\Models\Visitor;
use Illuminate\Support\Facades\URL;

trait GenerateLink
{
    public function generateLinkVisitor(array $ids)
    {
        $idsVisitors  = Visitor::whereIn('id', $ids)->get();
    }




    public function generateLink()
    {
    }
}
