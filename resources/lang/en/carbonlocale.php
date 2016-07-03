<?php

// This file should be located at your lang directory (app/lang/es?)

return array(

    'past'     =>  array(
        'second' => 'hace :delta segundo|hace :delta segundos',
        'minute' => 'hace :delta minuto|hace :delta minutos',
        'hour'   => 'hace :delta hora|hace :delta horas',
        'day'    => '{1} ayer|{2} hace dos días|[3,Inf] hace :delta días',
        'week'   => '{1} hace :delta semana|[2,Inf] hace :delta semanas',
        'month'  => '{1} hace :delta mes|[2,Inf] hace :delta meses',
        'year'   => 'hace :delta año|hace :delta años',
    ),

    'future' => array(
        'second' => 'en :delta segundo|en :delta segundos',
        'minute' => 'en :delta minuto|en :delta minutos',
        'hour'   => 'en :delta hora|en :delta horas',
        'day'    => '{1} mañana|{2} en dos días|[3,Inf] en :delta días',
        'week'   => '{1} en :delta semana|[2,Inf] en :delta semanas',
        'month'  => '{1} en :delta mes|[2,Inf] en :delta meses',
        'year'   => 'en :delta año|en :delta años',
    )
);