@extends('layouts.app')

@section('content')

        <!--　キャッチコピー・対応印刷所　-->
        <div class="my-5">
            <!--　キャッチコピー　-->
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mb-2">
                <div>
                    <p class="fs-1" style="color: #35a7ff;">
                        やりたい装丁から<br>
                        印刷所をディグる。<br>
                    </p>
                </div>
                <div>
                    <img src="img/main.png" width="200" height="200" alt="...">
                </div>
            </div>
            <!--　対応印刷所　アコーディオン　-->
            <div class="d-flex justify-content-center">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <span class="text-decoration-underline">対応印刷所</span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @foreach($shops as $shop)
                                <a href="{{$shop->url}}" class="d-inline-block" target="_blank" rel="noopener noreferrer">{{$shop->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center my-5">
                <p class="fs-2 blink" style="color: #ff5964;">↓ <span class="markerDeepYellow">さがしてみる</span> ↓</p>
            </div>
                    

            <form method="POST" action="/results">
                
            <!-- 表紙・本文　-->
            <div class="card w-75 mx-auto my-5 fadeup-box fadeup is-animated"
                style="border-color: #ff5964; border-width: 6px;">
                <div class="card-body">

                    <!--　表紙ヘッダー　-->
                    <nav class="navbar navbar-light">
                        <div class="container-fluid mb-2" style="background-color: #ffe74c;">
                            <span class="navbar-brand mb-0 h1">表紙</span>
                        </div>
                    </nav>
                    <!--　表紙セレクタ　-->
                    <div class="my-2">
                        <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">
                        @foreach($covers as $cover)
                                <input type="checkbox" class="btn-check" id="{{$cover->id}}" name="cover[{{$cover->id}}]" value="{{$cover->name}}" autocomplete="off">
                                <label class="btn btn-outline-dark" for="{{$cover->id}}">{{$cover->name}}</label>
                            <!--@if($cover->id % 4 === 0)-->
                            <!--    </div>-->
                            <!--@endif-->
                            <!--@if($cover->id % 4 === 0)-->
                            <!--   <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">-->
                            <!--@endif-->
                         @endforeach
                        </div>
                    </div>
                         
                         <nav class="navbar navbar-light">
                        <div class="container-fluid mb-2" style="background-color: #ffe74c;">
                            <span class="navbar-brand mb-0 h1">本文</span>
                        </div>
                    </nav>
                         
                         <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">
                        @foreach($bodys as $body)
                                <input type="checkbox" class="btn-check" id="{{$body->id}}" name="body[{{$body->id}}]" value="{{$body->name}}" autocomplete="off">
                                <label class="btn btn-outline-dark" for="{{$body->id}}">{{$body->name}}</label>
                            <!--@if($body->id % 4 === 0)-->
                            <!--    </div>-->
                            <!--@endif-->
                            <!--@if($body->id % 4 === 0)-->
                            <!--   <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">-->
                            <!--@endif-->
                         @endforeach 
                         </div>
                    </div>
                         
                         <nav class="navbar navbar-light">
                        <div class="container-fluid mb-2" style="background-color: #ffe74c;">
                            <span class="navbar-brand mb-0 h1">特殊仕様</span>
                        </div>
                    </nav>
                         
                         <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">
                        @foreach($specials as $special)
                                <input type="checkbox" class="btn-check" id="{{$special->id}}" name="special[{{$special->id}}]" value="{{$special->name}}" autocomplete="off">
                                <label class="btn btn-outline-dark" for="{{$special->id}}">{{$special->name}}</label>
                            <!--@if($special->id % 4 === 0)-->
                            <!--    </div>-->
                            <!--@endif-->
                            <!--@if($special->id % 4 === 0)-->
                            <!--   <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">-->
                            <!--@endif-->
                         @endforeach 
                         </div>
                    </div>
                         
                    </div>
                           
                    <!--    <select class="form-select my-2" aria-label="Default select example">-->
                    <!--        <option selected>PP加工</option>-->
                    <!--        <option value="1">クリア</option>-->
                    <!--        <option value="2">マット</option>-->
                    <!--        <option value="3">ホログラム</option>-->
                    <!--        <option value="4">ベルベット</option>-->
                    <!--        <option value="5">その他(特殊模様)</option>-->
                    <!--    </select>-->
                    <!--</div>-->
                    <!--表紙ここまで-->

                    <!--　本文ヘッダー　-->
                <!--    <nav class="navbar navbar-light">-->
                <!--        <div class="container-fluid mb-2" style="background-color: #ffe74c;">-->
                <!--            <span class="navbar-brand mb-0 h1">本文</span>-->
                <!--        </div>-->
                <!--    </nav>-->
                    <!--　本文セレクタ　-->
                <!--    <div class="my-2">-->
                <!--        <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">-->
                <!--            <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck13">インク色替え</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck14">本文紙 部分変更</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck15">遊び紙印刷</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck16">香り付遊び紙</label>-->
                <!--        </div>-->

                <!--        <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">-->
                <!--            <input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck17">らりるれ</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck18">わをん</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck19">バビブベ</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck20" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck20">パピプペポ</label>-->
                <!--        </div>-->

                <!--        <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">-->
                <!--            <input type="checkbox" class="btn-check" id="btncheck21" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck21">ザジズゼゾ</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck22" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck22">ゴゲグギガ</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck23" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck23">ゾゼズジザ</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck24" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck24">アアアアアアア</label>-->
                <!--        </div>-->

                <!--    </div>-->
                    <!--本文ここまで-->

                    <!--　その他ヘッダー　-->
                <!--    <nav class="navbar navbar-light">-->
                <!--        <div class="container-fluid mb-2" style="background-color: #ffe74c;">-->
                <!--            <span class="navbar-brand mb-0 h1">その他</span>-->
                <!--        </div>-->
                <!--    </nav>-->
                    <!--　その他セレクタ　-->
                <!--    <div class="my-2">-->
                <!--        <div class="btn-group mb-2 d-flex" role="group" aria-label="Basic checkbox toggle button group">-->
                <!--            <input type="checkbox" class="btn-check" id="btncheck25" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck25">変形断裁</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck26" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck26">小口染め</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck27" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck27">ワアアアアアア</label>-->

                <!--            <input type="checkbox" class="btn-check" id="btncheck28" autocomplete="off">-->
                <!--            <label class="btn btn-outline-dark" for="btncheck28">もぐらコロッケ</label>-->
                <!--        </div>-->
                <!--    </div>-->
                    <!--その他ここまで-->


                <!--</div>-->
            </div>

        </div>




        <div class="d-grid gap-2 col-6 mx-auto my-5 fadeup-box fadeup is-animated">
            <button type="submit" class="btn" style="background-color:#35a7ff; color:#fff;">検索</button>
        </div>
    @csrf
    </form>
    
    <div>
        <!--absoluteでmargin死んでる？確認-->　
    </div>

@endsection