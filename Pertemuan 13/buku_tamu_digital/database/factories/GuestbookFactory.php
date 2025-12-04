<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Services\FuzzyLogicService; 
class GuestbookFactory extends Factory
{
    public function definition(): array
    {
        $scoreFood = fake()->numberBetween(10, 100);
        $scoreService = fake()->numberBetween(10, 100);
        $scoreAmbiance = fake()->numberBetween(10, 100);

        $avg = ($scoreFood + $scoreService + $scoreAmbiance) / 3;
        $message = $this->generateMessage($avg);

        $fuzzyService = new FuzzyLogicService();
        
        $fuzzyResult = $fuzzyService->hitungKepuasan($scoreFood, $scoreService, $scoreAmbiance);
        
        $sentiment = $fuzzyService->analisisTeks($message);

        return [
            'customer_name' => fake()->name('id_ID'),
            'phone' => '08' . fake()->numerify('##########'),
            'score_food' => $scoreFood,
            'score_service' => $scoreService,
            'score_ambiance' => $scoreAmbiance,
            'message' => $message,
            
            'fuzzy_score' => $fuzzyResult['score'],
            'satisfaction_class' => $fuzzyResult['label'],
            'message_sentiment' => $sentiment,

            'created_at' => fake()->dateTimeBetween('-1 month', 'now'),
        ];
    }

    private function generateMessage($score)
    {
        $faker = fake();
        
        if ($score >= 80) {
            $positive = [
                "Makanannya enak banget, pelayanannya juga ramah.",
                "Sangat puas! Tempatnya cozy dan bersih.",
                "Mantap rasanya, harga worth it banget.",
                "Best restaurant in town! Pasti balik lagi.",
                "Pelayanan gercep, makanan sedap, top markotop!",
                "Suka banget sama suasananya, estetik parah.",
                "Rasa makanannya juara, tidak ada obat!",
                "Recommended banget buat makan bareng keluarga."
            ];
            return $faker->randomElement($positive);
        } 
        elseif ($score <= 40) {
            $negative = [
                "Kecewa banget, makanannya asin parah.",
                "Pelayanannya lama dan jutek, tolong diperbaiki.",
                "Tempatnya kotor dan panas, gak nyaman.",
                "Harganya mahal tapi rasanya hambar.",
                "Nunggu makanan 1 jam baru keluar, bad experience.",
                "Makanan datang sudah dingin dan berminyak.",
                "Sangat tidak recommended, kapok makan di sini.",
                "Pelayan salah catat menu terus, parah."
            ];
            return $faker->randomElement($negative);
        } 
        else {
            $neutral = [
                "Makanannya lumayan, tapi pelayanannya agak lama.",
                "Tempatnya oke, cuma harganya sedikit mahal.",
                "Rasanya biasa aja sih, nothing special.",
                "Cukup oke buat nongkrong, tapi makanan perlu ditingkatkan.",
                "Not bad, tapi porsinya dikit.",
                "Standar aja sih rasanya, gak wow banget.",
                "Pelayan ramah tapi tempatnya agak bising.",
                "B aja rasanya."
            ];
            return $faker->randomElement($neutral);
        }
    }
}