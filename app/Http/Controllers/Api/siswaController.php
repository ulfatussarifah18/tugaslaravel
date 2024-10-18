<?php

namespace App\Http\Controllers\Api;

//import model siswa
use App\Models\siswa;

use App\Http\Controllers\Controller;

//import resource siswaResource
use App\Http\Resources\siswatResource;

class siswaController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $siswas = siswa::latest()->paginate(5);

        //return collection of siswas as a resource
        return new siswaResource(true, 'List Data siswas', $siswas);
    }
}