<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
        <style>
            .box1 {
                background-color: #00AC97;
                background: -webkit-gradient(linear, left top, left bottom, from(#ddd), to(#00AC97));
                background: linear-gradient(to bottom, #ddd, #00AC97);
                background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 172, 151, 0.5)), to(rgba(0, 163, 129, 0.7)));
                background: linear-gradient(to bottom, rgba(0, 172, 151, 0.5), rgba(0, 163, 129, 0.7));
                height: 80px;
            }
            .box1 .title {
                color: #fff;
                padding: 0;
                margin: 0;
                font-family: 'Alegreya Sans SC', sans-serif;
            }
            .box2 {
                height: calc(100vh - 80px);
                border-right: 1px solid #777;
                overflow-y: scroll;
                -ms-overflow-style: none;
            }
            .box2::-webkit-scrollbar {
                display: none;
            }
            .box2 .user_name {
                background-color: transparent;
                font-size: 18px;
                outline: none;
                border: 0;
                border-bottom: 1px solid #444;
                color: #777;
            }
            .box2 .room-setting {
                font-size: x-large;
                color: #444;
            }
            .box2 .form-group {
                margin: 0 auto 10px;
                position: relative;
            }
            .box2 .form-group .form-control {
                color: #555;
                background-color: #f5f5f5;
                font-size: 18px;
                letter-spacing: 1px;
                height: 37px;
                padding: 2px 35px 2px 15px;
                border: none;
                border-radius: 50px;
            }
            .box2 .form-group .form-control:focus {
                border: none;
                outline: none;
            }
            .box2 .form-group .input-icon {
                color: #777;
                position: absolute;
                right: 15px;
                top: 20px;
                -webkit-transform: translateY(-50%);
                        transform: translateY(-50%);
                font-size: 15px;
            }
            .box2 .menu {
                max-width: 100;
            }
            .box2 .menu label {
                display: block;
                margin: 0;
                padding: 10px;
                line-height: 1;
                color: #fff;
                background: #00AC97;
                cursor: pointer;
            }
            .box2 .menu input {
                display: none;
            }
            .box2 .menu #menu_bar01:checked ~ #list01 li,
            .box2 .menu #menu_bar02:checked ~ #list02 li {
                height: 50px;
                opacity: 1;
            }
            .box2 .menu ul {
                margin: 0;
                padding: 0;
                background: #f4f4f4;
                list-style: none;
            }
            .box2 .menu ul li {
                height: 0;
                overflow: hidden;
                -webkit-transition: all 0.5s;
                transition: all 0.5s;
            }
            .box2 .menu a {
                display: block;
                padding: 15px;
                text-decoration: none;
                color: #000;
            }
            /* ログアウトのデザイン */
            .box2 a:link, a:visited, a:hover, a:active {
                color: #555;
            }
            /* /ログアウトのデザイン */
            .box4 {
                height: 50px;
                border-bottom: 1px solid #777;
                /* box4のバックカラー */
                background-color: #f5f5f5;
                /* /box4のバックカラー */
            }
            .box4 .setting {
                height: 100%;
                font-size: x-large;
            }
            /* box5の変更点 */
            .box5 {
                height: calc(100vh - 190px);
                overflow-y: scroll;
                -ms-overflow-style: none;
            }
            .box5::-webkit-scrollbar {
                display: none;
            }
            .box5 .class {
                overflow-y: scroll;
                -ms-overflow-style: none;
            }
            .box5 .class::-webkit-scrollbar {
                display: none;
            }
            /* /box5の変更点 */
        </style>
        <title>go @ home | 共有</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="header row">
                <div class="box1 col-lg d-flex align-items-center justify-content-center">
                    <h1 class="title text-monospace">GO @ HOME</h1>
                </div>
            </div>
            <div class="main row">
                <div class="box2 col-3 p-0">
                    <div class="d-flex justify-content-center">
                        <div class="p-2">
                            <img src="img/user_blue.png" width="70" height="70" class="rounded-circle align-middle img-responsive">
                        </div>
                        <div class="py-2 d-flex align-items-center">
                            <a href="#">
                                <input class="user_name align-middle font-weight-bold text-center" type="text" size="13px" value="サザエさん" readonly>
                            </a>
                        </div>
                        <div class="p-2 d-flex align-items-center">
                            <a href="#"><i class="room-setting fas fa-user-cog p-2"></i></a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" size="23" placeholder="グループ名・名前を入力">
                        <span class="input-icon"><i class="fas fa-search"></i></span>
                    </div>
                    <div class="menu">
                        <label for="menu_bar01"><i class="fa fa-users pr-2"></i>グループ<i class="fas fa-angle-down float-right"></i></label>
                        <input type="checkbox" id="menu_bar01" class="accordion" />
                        <ul id="list01">
                            <li><a href="#">磯野家</a></li>
                            <li><a href="#">フグ田家</a></li>
                            <li><a href="#">グループ１</a></li>
                            <li><a href="#">グループ２</a></li>
                            <li><a href="#">グループ３</a></li>
                            <li><a href="#">グループ４</a></li>
                            <li><a href="#">グループ５</a></li>
                        </ul>
                        <label for="menu_bar02"><i class="fas fa-user pr-2"></i>家族<i class="fas fa-angle-down float-right"></i></label>
                        <input type="checkbox" id="menu_bar02" class="accordion" />
                        <ul id="list02">
                            <li><a href="#">カツオ</a></li>
                            <li><a href="#">マスオさん</a></li>
                            <li><a href="#">ワカメ</a></li>
                            <li><a href="#">ノリスケさん</a></li>
                            <li><a href="#">お母さん</a></li>
                            <li><a href="#">お父さん</a></li>
                            <li><a href="#">タイ子さん</a></li>
                            <li><a href="#">お義母さん</a></li>
                        </ul>
                        <label for="menu_bar03"><i class="fas fa-folder pr-2"></i>共有<i class="fas fa-share float-right"></i></label>
                    </div>
                    <div class="py-2 d-flex align-items-center text-center">
                        <a href="#" class="logout">
                            <i class="fas fa-user-circle p-2">ログアウト</i>
                        </a>
                    </div>
                </div>
                <div class="box3 col-9 p-0">
                    <div class="box4 col-lg">
                        <div class="container">
                            <div class="d-flex align-items-center justify-content-between p-0">
                                {{-- box4の変更点 --}}
                                <div class="subname p-2 font-weight-bold">共有</div>
                                <div class="p-2 font-weight-bold"><i class="setting fas fa-cog"></i></div>
                                {{-- /box4の変更点 --}}
                            </div>
                        </div>
                    </div>
                    {{-- box5設定の画面 --}}
                    <div class="box5 mt-4 mx-4">
                        <div class="class col-8 mx-auto">
                            <div class="btn-up m-0 my-3">
                                <button type="button" class="btn btn-outline-info">フォルダを作成</button>
                                <button type="button" class="btn btn-outline-success">ファイルをアップロード</button>    
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-folder"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">cskjdsdkscpi</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.zip</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-images"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.jpg</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-folder"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">cskjdsdkscpi</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.zip</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-images"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.jpg</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-folder"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">cskjdsdkscpi</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.zip</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-images"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.jpg</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-folder"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">cskjdsdkscpi</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.zip</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-images"></i></span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">csk.jpg</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- /box5設定の画面 --}}
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
    </body>
</html>