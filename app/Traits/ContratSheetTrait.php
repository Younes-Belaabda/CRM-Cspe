<?php

    namespace App\Traits;

    trait ContratSheetTrait {
        // get BIC
        public function get_bic($iban){
            $url = "https://sheets.googleapis.com/v4/spreadsheets/" . config('sheetapi.spreadsheetId') . "/values/Sheet1?key=" . config('sheetapi.apiKey');
            $ch = curl_init();
            $url = "https://www.ibancalculator.com/iban_validieren.html";
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,"tx_valIBAN_pi1[iban]=$iban&tx_valIBAN_pi1[fi]=fi&no_cache=1");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
    
            $bic = substr($server_output , 16083 , strpos($server_output , 'js-copy-bic-btn'));
            $bic = trim($bic);
            $bic = str_split($bic , 11)[0];
    
            curl_close($ch);
    
            return $bic;
        }
        // // get values
        public function get_values(){
            $url = "https://sheets.googleapis.com/v4/spreadsheets/" . config('sheetapi.spreadsheetId') . "/values/Sheet1?key=" . config('sheetapi.apiKey');
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $values = json_decode(curl_exec($ch))->values;
            curl_close($ch);
            return $values;
        }
        // // append bic
        public function append_bic($values){
            $myvalues = [];
            foreach($values as $value){
                $bic = strip_tags($this->get_bic($value[8]));
                if($bic == '')
                    $bic = 'not valide';
                array_push($value , $bic);
                array_push($myvalues , $value);
            }
            return $myvalues;
        }
    }