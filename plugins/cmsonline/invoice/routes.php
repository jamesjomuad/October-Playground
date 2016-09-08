<?php


use cmsonline\invoice\Plugin;


Route::group(['prefix'=>Plugin::get()->baseUrl], function () {
    
    // Test Url
    Route::any('test',function(){
        dump(Plugin::get()->baseUrl);
    });
    
});

