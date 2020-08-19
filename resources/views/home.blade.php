@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fiev1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/34565799_438171569943658_196224265341632512_n.jpg?_nc_ht=instagram.fiev1-1.fna.fbcdn.net&_nc_ohc=p6pOrtMcKlUAX9euqFy&oh=c3b4121d1fd7f30e1840b2bcd99e7718&oe=5F67768F" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ Auth::user()->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>998m</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Daniel</div>
            <div class="">the worms will come for you</div>
            <div><a href="https://www.youtube.com/watch?v=GYgAvngxzMw">youtu.be/GYgAvngxzMw</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fiev1-1.fna.fbcdn.net/v/t51.2885-15/e15/c180.0.720.720a/s640x640/34828660_399177397266174_8815892701183475712_n.jpg?_nc_ht=instagram.fiev1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=Sk6DS575OFkAX-V-ivW&oh=2d8a775adcd028afd596da4b99cd5abd&oe=5F67AC8C" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fiev1-1.fna.fbcdn.net/v/t51.2885-15/e15/c180.0.719.719a/s640x640/26343319_1784758541826364_2037804476911321088_n.jpg?_nc_ht=instagram.fiev1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=dEI5ZJh0XzwAX-WJCgh&oh=7e48c8a00a4ed200e544bbe82d81d51d&oe=5F65EA26" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fiev1-1.fna.fbcdn.net/v/t51.2885-15/e15/c180.0.720.720a/s640x640/46305328_1391279744336305_2454554469085761861_n.jpg?_nc_ht=instagram.fiev1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=Xt0peGRkvg0AX_fKrQq&oh=90c5d02c41f915266b354759cb646477&oe=5F665396" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
