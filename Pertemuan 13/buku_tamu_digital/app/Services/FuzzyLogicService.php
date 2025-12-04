<?php

namespace App\Services;

class FuzzyLogicService
{
    
    public function hitungKepuasan($food, $service, $ambiance)
    {
       
        
        $foodFuzzy     = $this->fuzzifikasi($food);
        $serviceFuzzy  = $this->fuzzifikasi($service);
        $ambianceFuzzy = $this->fuzzifikasi($ambiance);

        
        $rules = [];


        $alpha1 = min($foodFuzzy['high'], $serviceFuzzy['high'], $ambianceFuzzy['high']);
        $rules[] = ['alpha' => $alpha1, 'z' => 100];


        $alpha2 = max($foodFuzzy['low'], $serviceFuzzy['low'], $ambianceFuzzy['low']);
        $rules[] = ['alpha' => $alpha2, 'z' => 20];

    
        $alpha3 = min($foodFuzzy['mid'], $serviceFuzzy['mid']);
        $rules[] = ['alpha' => $alpha3, 'z' => 60];


        
        $total_alpha_z = 0;
        $total_alpha = 0;

        foreach ($rules as $rule) {
            $total_alpha_z += ($rule['alpha'] * $rule['z']);
            $total_alpha += $rule['alpha'];
        }


        $finalScore = ($total_alpha == 0) ? 0 : ($total_alpha_z / $total_alpha);

        return [
            'score' => round($finalScore, 2),
            'label' => $this->getLabel($finalScore)
        ];
    }

   
    private function fuzzifikasi($val)
    {
        
        $low = 0; $mid = 0; $high = 0;

        
        if ($val <= 30) $low = 1;
        elseif ($val >= 50) $low = 0;
        else $low = (50 - $val) / (50 - 30);

       
        if ($val <= 30 || $val >= 70) $mid = 0;
        elseif ($val >= 30 && $val <= 50) $mid = ($val - 30) / (50 - 30);
        else $mid = (70 - $val) / (70 - 50);

        
        if ($val <= 50) $high = 0;
        elseif ($val >= 70) $high = 1;
        else $high = ($val - 50) / (70 - 50);

        return ['low' => $low, 'mid' => $mid, 'high' => $high];
    }

    private function getLabel($score)
    {
        if ($score >= 80) return 'Sangat Puas';
        if ($score >= 60) return 'Puas';
        if ($score >= 40) return 'Cukup';
        return 'Kurang Puas';
    }

    
   public function analisisTeks($pesan)
    {
        if (empty($pesan)) return 'Netral';

        
        $kataPenyangkal = ['tidak', 'gak', 'nggak', 'ga', 'bukan', 'kurang', 'jangan', 'kagak'];

        
        $kataPositif = [
            'enak', 'lezat', 'sedap', 'mantap', 'nikmat', 'gurih', 'legit', 
            'nagih', 'nendang', 'empuk', 'lembut', 'segar', 'fresh', 'hangat', 
            'matang', 'renyah', 'krispi', 'juara', 'higienis', 'bersih', 'yummy',
            'ramah', 'cepat', 'sigap', 'sopan', 'senyum', 'membantu', 
            'informatif', 'cekatan', 'gercep', 'baik', 'sabar', 'rapi',
            'nyaman', 'cozy', 'luas', 'adem', 'wangi', 'estetik', 'tenang',
            'murah', 'terjangkau', 'hemat', 'worth', 'promo', 'bagus', 'keren',
            'puas', 'suka', 'cinta', 'love', 'best', 'top', 'oke', 'ok', 
            'sempurna', 'rekomendasi', 'favorit', 'terbaik', 'kualitas', 'gokil'
        ];

        $kataNegatif = [
            'asin', 'pahit', 'hambar', 'anyep', 'tawar', 'gosong', 'alot', 
            'keras', 'mentah', 'basi', 'bau', 'amis', 'kecut', 'asem', 
            'busuk', 'lembek', 'dingin', 'minyak', 'berminyak', 'overcooked',
            'lama', 'lambat', 'lelet', 'jutek', 'judes', 'kasar', 'sombong', 
            'cuek', 'salah', 'lupa', 'ngawur', 'mengecewakan', 'lelah', 'letoy',
            'kotor', 'jorok', 'mahal', 'boros', 'dikit', 'sedikit', 'pelit',
            'panas', 'gerah', 'sumpek', 'sempit', 'bising', 'berisik', 
            'gelap', 'remang', 'lalat', 'nyamuk', 'berdebu',
            'kecewa', 'buruk', 'jelek', 'parah', 'ancur', 'rusak',
            'jijik', 'aneh', 'nyesel', 'kapok', 'zonk', 'bad', 'worst', 'kentang'
        ];

        
        $pesan = strtolower($pesan);
        $pesan = preg_replace('/[^\w\s]/', '', $pesan); 
        $words = explode(' ', $pesan);

        $skorPositif = 0;
        $skorNegatif = 0;

        foreach ($words as $index => $kata) {
            
            
            $isNegated = false;
            if ($index > 0 && in_array($words[$index - 1], $kataPenyangkal)) {
                $isNegated = true;
            }

           
            if (in_array($kata, $kataPositif)) {
                if ($isNegated) {
                   
                    $skorNegatif++; 
                } else {
                    
                    $skorPositif++;
                }
            }

          
            if (in_array($kata, $kataNegatif)) {
                if ($isNegated) {
                   
                    $skorPositif++; 
                } else {
                   
                    $skorNegatif++;
                }
            }
        }

     
        if ($skorPositif > $skorNegatif) return 'Positif';
        if ($skorNegatif > $skorPositif) return 'Negatif';
        
        return 'Netral';
    }
}