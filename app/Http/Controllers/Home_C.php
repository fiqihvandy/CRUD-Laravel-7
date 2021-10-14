<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home_C extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $home = DB::table('homes')->where('status', 1)->get();
        $status = [
            'sts' => 'home'
        ];
        $data = [
            'title' => $home[0]->title,
            'body' => $home[0]->content,
            'foot' => 'Read More',
            'img' => $home[0]->image
        ];
        return view('home', ['status' => $status, 'data' => $data]);
    }
    public function about()
    {
        $status = [
            'sts' => 'about'
        ];
        $data = [
            'title' => 'About Me',
            'body' => 'Nama lengkap saya Fiqih Vandy Firlana sekarang saya berumur 20 tahun, Sebagai seorang Programmer yang berfokus pada fullstack development saya dituntut untuk terus mempelajari berbagai macam bahasa pemrograman, Berikut bahasa pemrograman dan framework yang saya kuasai antara lain : PHP, Html, CSS, Python, Java, Angular, Codeigniter, Laravel, Ionic dan lain-lain',
            'foot' => 'Read More',
            'img' => 'me2.png'
        ];
        return view('home', ['status' => $status, 'data' => $data]);
    }
    public function porto()
    {
        $status = [
            'sts' => 'porto'
        ];
        $data = [
            'title' => 'Portofolio',
            'body' => 'Berikut adalah hasil karya saya selama 2 tahun berada di bidang programmer, Gambar pertama adalah aplikasi web POS(point of sale) untuk Hotel dan Restoran, Gambar kedua adalah aplikasi web komik digital',
            'foot' => 'Read More',
            'img' => ''
        ];
        $porto = [
            [
                'judul' => 'POS Hotel dan Restoran',
                'gambar' => 'por3.png'
            ],
            [
                'judul' => 'Komik Digital',
                'gambar' => 'por2.png'
            ]
        ];
        return view('home', ['status' => $status, 'data' => $data, 'porto' => $porto]);
    }
    public function admin()
    {
        $status = [
            'sts' => 'admin'
        ];
        $data = [
            'title' => 'Administrator',
            'body' => 'log in to admin page if you are an admin, You can change the content of this dashboard page via the Admin Page.',
            'img' => 'lte2.png'
        ];
        return view('home', ['status' => $status, 'data' => $data]);
    }

    public function show()
    {
        return view('welcome', ['judul' => 'ITB ASIA']);
    }

    public function pass($id)
    {
        return view('welcome', ['judul' => $id]);
    }

    public function r_home()
    {
        $home = DB::table('homes')->where('status', 1)->get();
        $data = [
            'title' => $home[0]->title,
            'body' => $home[0]->content,
            'foot' => 'Read More',
            'img' => $home[0]->image
        ];
        return view('read.r_home', ['data' => $data]);
    }

    public function r_about()
    {
        $data = [
            'title' => 'About Me',
            'body' => 'Nama lengkap saya Fiqih Vandy Firlana sekarang saya berumur 20 tahun, Sebagai seorang Programmer yang berfokus pada fullstack development saya dituntut untuk terus mempelajari berbagai macam bahasa pemrograman, Berikut bahasa pemrograman dan framework yang saya kuasai antara lain : PHP, Html, CSS, Python, Java, Angular, Codeigniter, Laravel, Ionic dan lain-lain',
            'foot' => 'Read More',
            'img' => 'me2.png'
        ];
        return view('read.r_about', ['data' => $data]);
    }

    public function r_porto()
    {
        $data = [
            'title' => 'Portofolio',
            'body' => 'Berikut adalah hasil karya saya selama 2 tahun berada di bidang programmer, Gambar pertama adalah aplikasi web POS(point of sale) untuk Hotel dan Restoran, Gambar kedua adalah aplikasi web komik digital',
            'foot' => 'Read More',
            'img' => ''
        ];
        return view('read.r_porto', ['data' => $data]);
    }
}
