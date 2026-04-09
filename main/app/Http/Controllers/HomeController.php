<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    private function solutionsData(): array
    {
        return [
            [
                'slug' => 'sap',
                'name' => 'SAP',
                'logo' => 'assets/img/logo/sap.png',
            ],
            [
                'slug' => 'salesforce',
                'name' => 'Salesforce',
                'logo' => 'assets/img/logo/salesforce.png',
            ],
            [
                'slug' => 'yonyou',
                'name' => 'Yonyou',
                'logo' => 'assets/img/logo/yonyou.png',
            ],
            [
                'slug' => 'aws',
                'name' => 'AWS',
                'logo' => 'assets/img/logo/aws.png',
            ],
            [
                'slug' => 'huawei',
                'name' => 'Huawei',
                'logo' => 'assets/img/logo/huawei.png',
            ],
            [
                'slug' => 'google-cloud',
                'name' => 'Google Cloud',
                'logo' => 'assets/img/logo/gcp.png',
            ],
            [
                'slug' => 'samsung',
                'name' => 'Samsung',
                'logo' => 'assets/img/logo/samsung.png',
            ],
            [
                'slug' => 'ibm',
                'name' => 'IBM',
                'logo' => 'assets/img/logo/ibm.png',
            ],
        ];
    }

    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about_us');
    }

    public function solution()
    {
        $solutions = array_map(function (array $solution) {
            return [
                ...$solution,
                'url' => route('our_solution_detail', ['slug' => $solution['slug']]),
            ];
        }, $this->solutionsData());

        return view('our_solution', [
            'solutions' => $solutions,
        ]);
    }

    public function solutionDetail(string $slug)
    {
        $solution = Arr::first($this->solutionsData(), fn (array $solution) => $solution['slug'] === $slug);

        if (! $solution) {
            abort(404);
        }

        return view('solution_detail', [
            'solution' => $solution,
        ]);
    }

    public function sapPrivateEdition()
    {
        return view('sap_private_edition');
    }

    public function sapPublicEdition()
    {
        return view('sap_public_edition');
    }

    public function stories()
    {
        return view('success_story');
    }

    public function news()
    {
        // return view('news');
        
        return view('maintenance');
    }

    public function career()
    {
        return view('career');
    }

    public function contact()
    {
        return view('contact_us');
    }

    public function contactStore(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:50'],
            'company' => ['required', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        ContactMessage::create($validated);

        return back()->with('status', 'Pesan berhasil dikirim.');
    }

    public function maintenance(){
        return view('maintenance');
    }
}
