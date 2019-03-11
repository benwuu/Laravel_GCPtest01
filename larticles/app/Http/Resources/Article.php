<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Article extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);    //顯示所有資訊

        return [                          //只顯示特定
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body

        ];
    }

    public function with($request){
        return[
            'version' => '1.0.0',
            'suthor_url' => url('http://traversymedia.com')
        ];
    }
}
