<?php

namespace App\Http\Controllers\channels;

use App\Factories\channels\ChannelFactory;
use App\Http\Controllers\Controller;
use App\Models\channels;
use App\Http\Requests\StorechannelsRequest;
use App\Http\Requests\UpdatechannelsRequest;
use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private  $channel;
    public function __construct(ChannelFactory $channel)
    {
        $this->channel=$channel::index();
    }

    public function index()
    {

     $channels= $this->channel->getAll();

      return response()->json(['data' => $channels],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->channel->create($request->all());
        return response()->json([
            'message' => 'Created Successfully',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorechannelsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorechannelsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function show(channels $channels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function edit(channels $channels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatechannelsRequest  $request
     * @param  \App\Models\channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatechannelsRequest $request, channels $channels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\channels  $channels
     * @return \Illuminate\Http\Response
     */
    public function destroy(channels $channels)
    {
        //
    }
}
