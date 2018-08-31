<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        //get data from http://larticles.test/api/articles 
        $a = [ 'test' => [
            'name' => $this->name,
            'body' => $this->body
        ]];

        $b = [ 
            'name' => $this->name,
            'body' => $this->body
        ];

        return $b;
    }

    public function with($request)
    {
        return [
            'test add' => 'addition test',
            'lmao' => 'rofl'  
        ];
    }
}
