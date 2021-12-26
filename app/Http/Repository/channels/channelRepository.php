<?php
/**
 * Created by PhpStorm.
 * User: Walid.Dahshour
 * Date: 12/26/2021
 * Time: 6:01 PM
 */

namespace App\Http\Repository\channels;


use App\Contracts\channels\channelRespositoryInterface;
use App\Models\channels;

class channelRepository implements channelRespositoryInterface
{

    public function getAll()
    {
        return  channels::all();
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function create($request)
    {

        if($request->channel_icon){

            $name = time().'.' . explode('/', explode(':', substr($request->channel_icon, 0, strpos($request->channel_icon, ';')))[1])[1];
            \Intervention\Image\Image::make($request->channel_icon)->save(public_path('channels/').$name);
            $request->merge(['channel_icon' => $name]);

        }

        channels::create($request->all());

        return ['message' => 'Success'];

    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}