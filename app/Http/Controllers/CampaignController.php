<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;


class CampaignController extends Controller
{
    public function index(){
        return view('campaign.index');
    }

    public function create(){
        return view('campaign.create');
    }

    public function edit(Campaign $campaign){
        return view('campaign.edit',compact('campaign'));
    }

    public function stores(Campaign $campaign){
        return view('campaign.stores',compact('campaign'));
    }

    public function elementos(Campaign $campaign){
        return view('campaign.elementos',compact('campaign'));
    }

    public function storeselementos(Campaign $campaign){
        return view('campaign.storeselementos',compact('campaign'));
    }

    public function elementosQ(Campaign $campaign){
        return view('campaign.elementos-q',compact('campaign'));
    }

    public function cabecera(Campaign $campaign){
        return view('campaign.cabecera',compact('campaign'));
    }

}
