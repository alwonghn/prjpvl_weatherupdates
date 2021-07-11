<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'sensor_no'=> $this->sensor_no,
            'sensor_id'=> $this->sensor_id,
            'temperature'=> $this->temperature,
            'humidity'=> $this->humidity,
            'sensor_creation_date'=> (string) $this->sensor_creation_date,
            'sensor_updated_date'=> (string) $this->sensor_updated_date
        ];
    }
}
