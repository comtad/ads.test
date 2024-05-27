<?php

namespace App\Http\Controllers;

use App\Http\Requests\Advert\AdvertsGetRequest;
use App\Http\Requests\Advert\AdvertStoreRequest;
use App\Http\Resources\Advert\AdvertIndexResource;
use App\Http\Resources\Advert\AdvertSinglePageResource;
use App\Http\Resources\Advert\GetDecriptionResource;
use App\Http\Resources\Advert\GetMorePhotosResource;
use App\Http\Resources\Image\ImageResource;
use App\Models\Advert;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class AdverdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Advert/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit_url = URL::route('advert.store');
        return Inertia::render('Advert/Create', compact('edit_url'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdvertStoreRequest $request)
    {
        $data = $request->validated();

        $advert = new Advert;
        $advert->title = $data['title'];
        $advert->description = $data['description'];
        $advert->price = $data['price'];
        $advert->save();

        $image = new Image;
        $image->link = $data['photo0'];
        $image->advert_id = $advert->id;
        $image->save();

        $image = new Image;
        $image->link = $data['photo1'];
        $image->advert_id = $advert->id;
        $image->save();

        $image = new Image;
        $image->link = $data['photo2'];
        $image->advert_id = $advert->id;
        $image->save();


        return redirect()->route('advert.show', $advert->id)
            ->with('message', 'Объявление успешно создано');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advert $advert)
    {
        $advert = AdvertSinglePageResource::make($advert)->resolve();

        return Inertia::render('Advert/Show', compact('advert'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advert $advert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advert $advert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advert $advert)
    {
        //
    }

    public function getAdverts(AdvertsGetRequest $request)
    {
        $data = $request->validated();


        if ($data['high_to_low_price'] == true)
        {
            $adverts = Advert::query()->orderBy('price', 'asc')->paginate(10, ['*'], 'page', $data['page']);

            return AdvertIndexResource::collection($adverts);
        }
        elseif ($data['low_to_high_price'] == true)
        {
            $adverts = Advert::query()->orderBy('price', 'desc')->paginate(10, ['*'], 'page', $data['page']);

            return AdvertIndexResource::collection($adverts);
        }
        elseif ($data['new_to_old_date'] == true)
        {

            $adverts = Advert::query()->orderBy('created_at', 'DESC')->paginate(10, ['*'], 'page', $data['page']);

            return AdvertIndexResource::collection($adverts);
        }
        elseif ($data['old_to_new_date'] == true)
        {
            $adverts = Advert::query()->orderBy('created_at', 'ASC')->paginate(10, ['*'], 'page', $data['page']);

            return AdvertIndexResource::collection($adverts);
        }
        else
        {
            $adverts = Advert::paginate(10, ['*'], 'page', $data['page']);

            return AdvertIndexResource::collection($adverts);
        }
    }

    public function getMorePhotos($id)
    {

        $data = Image::query()->where('advert_id', $id)->get();
        $data = GetMorePhotosResource::collection($data)->forget(0);

        return $data;
    }

    public function getDescription($id)
    {

        $data = Advert::where('id', $id)->get();
        $data = GetDecriptionResource::collection($data)->resolve();

        return $data[0]['text'];
    }

}
