<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
	    #return parent::toArray($request);
	    return [
		'id' => $this->id,
	    	'quote' => $this->quote,
		'name' => $this->historian,
		'year' => $this->year
	    ];
    }
}
