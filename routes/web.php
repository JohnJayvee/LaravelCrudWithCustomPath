<?php
foreach(glob(app_path("System/Routes/Web/*.php")) as $file) {
    include_once ($file);
}
// Route::get('/', function () {
//     return view('welcome');
// });
