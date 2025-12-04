<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;           
use App\Services\FuzzyLogicService; 

class GuestbookController extends Controller
{
    
    public function index()
    {
        return view('form_tamu'); 
    }

   
    public function store(Request $request, FuzzyLogicService $fuzzy)
    {
       
        if ($request->has('satisfaction_score')) {
          
            $request->validate([
                'customer_name'      => 'required|string|max:255',
                'satisfaction_score' => 'required|integer|min:0|max:100',
                'message'            => 'nullable|string'
            ]);

            $score = $request->satisfaction_score;
            $label = 'Kurang Puas';
            if ($score >= 80) $label = 'Sangat Puas';
            elseif ($score >= 60) $label = 'Puas';
            elseif ($score >= 40) $label = 'Cukup';

            Guestbook::create([
                'customer_name'      => $request->customer_name,
                'score_food'         => $score, 
                'score_service'      => $score,
                'score_ambiance'     => $score,
                'message'            => $request->message,
                'fuzzy_score'        => $score,
                'satisfaction_class' => $label,
                'message_sentiment'  => 'Netral'
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Data berhasil ditambahkan oleh Admin.');

        } else {
            $request->validate([
                'customer_name'  => 'required|string|max:255',
                'phone'          => 'nullable|string|max:20',
                'score_food'     => 'required|integer|min:0|max:100',
                'score_service'  => 'required|integer|min:0|max:100',
                'score_ambiance' => 'required|integer|min:0|max:100',
                'message'        => 'nullable|string'
            ]);
    
            $hasilFuzzy = $fuzzy->hitungKepuasan(
                $request->score_food,
                $request->score_service,
                $request->score_ambiance
            );
            
            $sentiment = method_exists($fuzzy, 'analisisTeks') ? $fuzzy->analisisTeks($request->message) : '-';
    
            Guestbook::create([
                'customer_name'      => $request->customer_name,
                'phone'              => $request->phone,
                'score_food'         => $request->score_food,
                'score_service'      => $request->score_service,
                'score_ambiance'     => $request->score_ambiance,
                'message'            => $request->message,
                'fuzzy_score'        => $hasilFuzzy['score'],
                'satisfaction_class' => $hasilFuzzy['label'],
                'message_sentiment'  => $sentiment
            ]);
    
            return redirect()->back()->with('success', 'Terima kasih! Penilaian Anda telah disimpan.');
        }
    }

    public function dashboard(Request $request) 
    {
        $query = Guestbook::latest();

        if ($request->has('filter') && $request->filter != '') {
            $query->where('satisfaction_class', $request->filter);
        }

        $data_tamu = $query->get();

        $statistik = [
            'Sangat Puas' => Guestbook::where('satisfaction_class', 'Sangat Puas')->count(),
            'Puas'        => Guestbook::where('satisfaction_class', 'Puas')->count(),
            'Cukup'       => Guestbook::where('satisfaction_class', 'Cukup')->count(),
            'Kurang Puas' => Guestbook::where('satisfaction_class', 'Kurang Puas')->count(),
        ];

        $total_tamu = Guestbook::count();
        $rata_performa = Guestbook::avg('fuzzy_score') ?? 0;

        return view('dashboard_admin', compact('data_tamu', 'statistik', 'total_tamu', 'rata_performa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name'      => 'required|string|max:255',
            'satisfaction_score' => 'required|integer|min:0|max:100',
            'message'            => 'nullable|string'
        ]);

        $tamu = Guestbook::findOrFail($id);
        $tamu->customer_name = $request->customer_name;
        $tamu->message = $request->message;
        
        $score = $request->satisfaction_score;
        $tamu->fuzzy_score = $score;
        
        $label = 'Kurang Puas';
        if ($score >= 80) $label = 'Sangat Puas';
        elseif ($score >= 60) $label = 'Puas';
        elseif ($score >= 40) $label = 'Cukup';
        
        $tamu->satisfaction_class = $label;
        $tamu->save();

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $tamu = Guestbook::findOrFail($id);
        $tamu->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil dihapus!');
    }
}