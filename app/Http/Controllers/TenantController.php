<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantController extends Controller
{

    function __construct()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Tenant::latest('updated_at')->get();

        return view('admin.tenants.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tenants.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $this->validate($request, [
            'name' => 'required|unique:tenants,name',
            'domain' => 'required|unique:tenants,domain',
            'database' => 'required|unique:tenants,database',
        ]);

        $tenant = Tenant::create($validated);

        return redirect()->route('admin.tenants.index')
            ->with('success', 'Tenant created successfully.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Tenant::findOrFail($id);

        return view('admin.tenants.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $this->validate($request, [
            'name' => 'required|unique:tenants,name',
            'domain' => 'required|unique:tenants,domain',
        ]);

        $item = Tenant::findOrFail($id);

        $item->update($validated);

        return redirect()->route(ADMIN . '.tenants.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Tenant::find($id)->delete();

        return redirect()->route('admin.tenants.index')
            ->with('success', 'Tenant deleted successfully');
    }

}