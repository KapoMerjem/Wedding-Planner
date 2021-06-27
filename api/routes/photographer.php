<?php

Flight::route('GET /photographers', function(){
    $id_city = Flight::query('id_city');
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);
    $search = Flight::query('search');
    $order = Flight::query('order', '-id');

    Flight::json(Flight::photographerService()->get_photographers($id_city, $offset, $limit, $search, $order));
});

Flight::route('POST /photographers', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::photographerService()->add($data));
});

?>
