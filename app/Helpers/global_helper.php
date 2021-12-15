<?php

    if(!function_exists('tgl_indo')){
        function tgl_indo($tanggal)
        {
            $bulan = array(
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);

            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    }

    if(!function_exists('getUser')){
        function getUser($id)
        {
            $user = DB::table('users')->where('id', $id)->first();

            return $user;
        }
    }

    if(!function_exists('getDayInDate')){
        function getDayInDate($day)
        {
            switch($day){
                case 1: {
                    $day = 'Senin';
                    }break;
                case 2: {
                    $day = 'Selasa';
                    }break;
                case 3: {
                    $day = 'Rabu';
                    }break;
                case 4: {
                    $day = 'Kamis';
                    }break;
                case 5: {
                    $day = 'Jumat';
                    }break;
                case 6: {
                    $day = 'Sabtu';
                    }break;
                case 7: {
                    $day = 'Minggu';
                    }break;
            }

            return $day;
        }
    }

    if(!function_exists('getMasterHeader')){
        function getMasterHeader($id)
        {
            $master_header = DB::table('master_header')->where('id', $id)->first();

            return $master_header;
        }
    }
?>