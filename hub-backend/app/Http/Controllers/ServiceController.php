<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //all
        return Service::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  
        return view('services.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        
        //store
        $service = Service::create($request->validated());

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        // show service
        return view('services.show', compact('service'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // edit service 
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        // update   
        $service->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // destroy
        $service->delete();
    }
}
