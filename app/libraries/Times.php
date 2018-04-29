<?php

class Times {

    /**
    * 0000-00-00 00:00:00 -> 00/00/0000 00:00:00
    **/
    public function db_para_ui($datetime_db)
    {
        $datetime_db = explode(' ', $datetime_db);
        $horas = $datetime_db[1];
        $datetime_db = explode("-", $datetime_db[0]);
        $datetime_db = $datetime_db[2]. '/' .$datetime_db[1]. '/' .$datetime_db[0] .' '. $horas;
        return $datetime_db;
    }

    /**
    * 00/00/0000 -> 0000-00-00
    **/
    public function ui_para_db($datetime_ui)
    {
        $datetime_ui = explode("/", $datetime_ui);
        return $datetime_ui[2]. '-' .$datetime_ui[1]. '-' .$datetime_ui[0];
    }

    /**
    * Retorna a diferença entre duas datas
    **/
    public function diferenca($date_1, $date_2)
    {
        $data_inicio = new DateTime($date_1);
        $data_fim = new DateTime($date_2);

        $diferenca = $data_inicio->diff($data_fim);

        $resultado = array(
            'anos' => $dateInterval->y,
            'meses' => $dateInterval->m,
            'dias' => $dateInterval->d,
            'horas' => $diferenca->h + ($diferenca->days * 24),
            'minutos' => $diferenca->i + ($diferenca->i * 60),
            'segundos' => $diferenca->s + ($diferenca->s * 60),
        );
        return $resultado;
    }

    /**
    * Retorna um array com todos os dias do ano por mês
    **/
    function dias_do_ano($ano){
        $datas = new DatePeriod(new DateTime($ano.'-01-01'), new DateInterval('P1D'), new DateTime($ano.'-12-31'));
        $datas_array = array();

        foreach($datas as $data) {
            array_push($datas_array, $data->format('Y-m-d'));
        }
        return $datas_array;
    }

    /**
    * Retorna um array com todos os meses do ano
    * ['janeiro' => 2018-01, 'fevereiro' => 2018-02 ...]
    **/
    function meses_do_ano($ano){
        return array(
            'Janeiro' => $ano.'-01',
            'Fevereiro' => $ano.'-02',
            'Março' => $ano.'-03',
            'Abril' => $ano.'-04',
            'Maio' => $ano.'-05',
            'Junho' => $ano.'-06',
            'Julho' => $ano.'-07',
            'Agosto' => $ano.'-08',
            'Setembro' => $ano.'-09',
            'Outubro' => $ano.'-10',
            'Novembro' => $ano.'-11',
            'Dezembro' => $ano.'-12'
        );
    }

}
