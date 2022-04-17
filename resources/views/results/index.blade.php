@extends('layouts.app')

@section('content')

        <!--　タイトル　-->
        <div class="d-flex justify-content-center my-5">
            <!--　アニメーション確認　-->
            <p class="fs-2 typingText">計画中の装丁は．．．</p>
        </div>
        <!--　タイトルここまで　-->

        <!-- 　表紙リザルト　-->
        <div class="card w-75 mx-auto my-5 fadeup-box fadeup is-animated"
            style="border-color: #ff5964; border-width: 6px;">
            <div class="card-body">
                <!--　表紙ヘッダー　-->
                <nav class="navbar navbar-light">
                    <div class="container-fluid mb-2" style="background-color: #ffe74c;">
                        <span class="navbar-brand mb-0 h1">表紙の仕様</span>
                    </div>
                </nav>
                
                <!--　表紙仕様　-->
                <div class="d-flex flex-column flex-md-row align-items-center mb-2">
                    <div class="me-3">
                        <img src="img/result1.png" width="200" height="200" alt="...">
                    </div>
                    <div>
                        @if($reqCovers != null)
                            @foreach($reqCovers as $reqCover)
                            <p>・{{$reqCover}}</p>
                            @endforeach
                            @else
                            <p>選択なし</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--　表紙ここまで　-->

        <!-- 　本文リザルト　-->
        <div class="card w-75 mx-auto my-5 fadeup-box fadeup is-animated"
            style="border-color: #ff5964; border-width: 6px;">
            <div class="card-body">
                <!--　本文ヘッダー　-->
                <nav class="navbar navbar-light">
                    <div class="container-fluid mb-2" style="background-color: #ffe74c;">
                        <span class="navbar-brand mb-0 h1">本文の仕様</span>
                    </div>
                </nav>
                <!--　本文仕様　-->
                <div class="d-flex flex-column flex-md-row align-items-center mb-2">
                    <div class="me-3">
                        <img src="img/result2.png" width="200" height="200" alt="...">
                    </div>
                    <div>
                        @if($reqBodys != null)
                            @foreach($reqBodys as $reqBody)
                            <p>・{{$reqBody}}</p>
                            @endforeach
                            @else
                            <p>選択なし</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--　本文ここまで　-->

        <!--　その他リザルト　-->
        <div class="card w-75 mx-auto my-5 fadeup-box fadeup is-animated"
            style="border-color: #ff5964; border-width: 6px;">
            <div class="card-body">
                <!--　その他ヘッダー　-->
                <nav class="navbar navbar-light">
                    <div class="container-fluid mb-2" style="background-color: #ffe74c;">
                        <span class="navbar-brand mb-0 h1">その他オプション</span>
                    </div>
                </nav>
                <!--　その他仕様　-->
                <div class="d-flex flex-column flex-md-row align-items-center mb-2">
                    <div class="ms-4">
                        @if($reqSpecials != null)
                            @foreach($reqSpecials as $reqSpecial)
                            <span class ="d-inline-block">{{$reqSpecial}}</span>
                            @endforeach
                            @else
                            <p>選択なし</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--　その他ここまで　-->

        <!--　印刷所検索リザルト　-->
        <div class="card w-100 mx-auto my-5 fadeup-box fadeup is-animated" style="border-style: none;">
            <div class="card-body">
                <!--　検索リザルトヘッダー　-->
                <nav class="navbar navbar-light">
                    <div class="container-fluid mb-5 justify-content-center align-items-center"
                        style="background-color: #35a7ff; height: 70px; ">
                        <span class="navbar-brand mb-0 fs-2 fw-bold" style="color: #ffe74c;">つくれる！印刷所</span>
                    </div>
                </nav>
                <!--　結果印刷所リンク　-->
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mb-2">
                    <div class="ms-4">
                        @if($filShops != null)
                            @foreach($filShops as $filShop)
                            <a href="{{$filShop->url}}">・{{$filShop->name}}</a>
                            @endforeach
                            @else
                            <p>見つかりませんでした…</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--　印刷所検索リザルトここまで　-->

        <!--　シェア用リンク　-->
        <div class="card w-75 mx-auto my-5" style="border: none;">
            <div class="d-flex mb-3 flex-column flex-row align-items-center">
                <div class="fs-2 mb-2" style="color: #ff5964;">
                    シェアして退路を断とう！
                </div>
            </div>

            <div class="d-flex mb-3 flex-row justify-content-evenly">
                <!-- twitter -->
                <div>
                    <a href="#">
                        <img src="img/ic-tw.png" width="50px" height="50px" alt="...">
                    </a>
                </div>
                <div>
                    <!-- LINE -->
                    <a href="https://social-plugins.line.me/lineit/share?url=">
                        <img src="img/ic-ln.png" width="50px" height="50px" alt="...">
                    </a>
                </div>
                <div>
                    <!-- Facebook -->
                    <a href="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v12.0">
                        <img src="img/ic-fb.png" width="50px" height="50px" alt="...">
                    </a>
                </div>
            </div>
            <!--結果コピペ用-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">結果を表示　コピペ用</label>
            </div>
        </div>
        <!--　シェア用リンクここまで　-->

        <!--　もう1度探す　トップ画面(選択そのまま遷移　確認)　-->
        <div class="d-grid gap-2 col-6 mx-auto my-5 fadeup-box fadeup is-animated">
            <a href="{{ url('/') }}" type="button" class="btn" style="background-color: #35a7ff; color:#fff;">もう一度さがす</button></a>
        </div>
    
    <div>
        <!--absoluteでmargin死んでる？確認-->　
    </div>

    @endsection