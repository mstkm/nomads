<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\TravelPackageRequest;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.travel-package.index', [
          'travelPackages' => TravelPackage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $slug = Str::slug($request->title);
        $data['slug'] = $slug;
        TravelPackage::create($data);
        return redirect('admin/travel-package')->with('success', 'Paket travel baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $travelPackage = TravelPackage::findOrFail($id);

        return view('pages.admin.travel-package.edit', [
          'travelPackage' => $travelPackage
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $data = $request->all();
      $slug = Str::slug($request->title);
      $data['slug'] = $slug;

      $travelPackage = TravelPackage::findOrFail($id);

      $travelPackage->update($data);

      return redirect('admin/travel-package')->with('success', 'Paket travel berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
