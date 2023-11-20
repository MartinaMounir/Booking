<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Stay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Stays = Stay::where('user_id',auth()->id())->get();
        return view('vendor.index', compact('Stays'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('vendor.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => ['required', 'string', 'max:500'],
            'title' => ['required', 'string', 'max:100'],
            'numberofrooms' => ['required', 'int'],
            'available' => ['required', 'bool'],
            'country_id' => ['required', 'int', 'exists:countries,id'],
            'address' => ['required', 'string', 'max:500'],
            'image1' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],
            'image2' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],
            'image3' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],
            'image4' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],

        ]);
        $stay = $request->only('description','title', 'numberofrooms', 'available', 'country_id', 'address');

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageNewName1 = Str::random() . '.' . $image1->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName1, $image1->getContent());
            $stay['image1'] = $imageNewName1;
        }
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageNewName2 = Str::random() . '.' . $image2->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName2, $image2->getContent());
            $stay['image2'] = $imageNewName2;
        }
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageNewName3 = Str::random() . '.' . $image3->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName3, $image3->getContent());
            $stay['image3'] = $imageNewName3;
        }
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            $imageNewName4 = Str::random() . '.' . $image4->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName4, $image4->getContent());
            $stay['image4'] = $imageNewName4;
        }
        auth()->user()->stays()->create($stay);
        return redirect()->route('vendor.vendor.index')->with('success', 'stays Added');



    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stay $stay)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {$stay=Stay::find($id);
        $countries = Country::all();
        return view('vendor.edit', compact('stay', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {   $stay=Stay::find($id);
        $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:500'],
            'numberofrooms' => ['required', 'int'],
            'available' => ['required', 'bool'],
            'country_id' => ['required', 'int', 'exists:countries,id'],
            'address' => ['required', 'string', 'max:500'],
            'image1' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],
            'image2' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],
            'image3' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],
            'image4' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg']
        ]);

        $data2 = $request->only('title','description','numberofrooms','available','country_id','address');
        if ($request->hasFile('image1')) {
            if (Storage::disk('public')->exists('stays/' . $stay->image1)) {
                Storage::disk('public')->delete('stays/' . $stay->image1);
            }
            $image1 = $request->file('image1');
            $imageNewName1 = Str::random() . '.' . $image1->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName1, $image1->getContent());
            $data2['image1'] = $imageNewName1;
        }
        if ($request->hasFile('image2')) {
            if (Storage::disk('public')->exists('stays/' . $stay->image)) {
                Storage::disk('public')->delete('stays/' . $stay->image);
            }
            $image2 = $request->file('image2');
            $imageNewName2 = Str::random() . '.' . $image2->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName2, $image2->getContent());
            $data2['image2'] = $imageNewName2;
        }
        if ($request->hasFile('image3')) {
            if (Storage::disk('public')->exists('stays/' . $stay->image3)) {
                Storage::disk('public')->delete('stays/' . $stay->image3);
            }
            $image3 = $request->file('image3');
            $imageNewName3 =  Str::random() . '.' . $image3->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName3, $image3->getContent());
            $data2['image3'] = $imageNewName3;
        }
        if ($request->hasFile('image4')) {
            if (Storage::disk('public')->exists('stays/' . $stay->image)) {
                Storage::disk('public')->delete('stays/' . $stay->image);
            }
            $image4 = $request->file('image4');
            $imageNewName4 = Str::random() . '.' . $image4->getClientOriginalExtension();
            Storage::disk('public')->put('stays/' . $imageNewName4, $image4->getContent());
            $data2['image4'] = $imageNewName4;
        }


        $stay->update($data2);
        return redirect('vendor')->with('success', 'Stay Update');


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {  $stay=Stay::find($id);
        if (storage::disk('public')->exists('stays/' . $stay->image1)) {
        storage::disk('public')->delete('stays/' . $stay->image1);
    }
        if (storage::disk('public')->exists('stays/' . $stay->image2)) {
            storage::disk('public')->delete('stays/' . $stay->image2);
        }
        if (storage::disk('public')->exists('stays/' . $stay->image3)) {
            storage::disk('public')->delete('stays/' . $stay->image3);
        }
        if (storage::disk('public')->exists('stays/' . $stay->image4)) {
            storage::disk('public')->delete('stays/' . $stay->image4);
        }
        $stay->delete();
        return redirect()->route('vendor.vendor.index')->with('success', 'Stay deleted');

    }
}
