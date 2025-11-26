<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Markalar;
use App\Models\Members;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $markalar = Markalar::orderBy('priority')->get();
        $portfolios = [
            ['img'=>'kurumsal.png','title'=>'KURUMSAL KİMLİK'],
            ['img'=>'marka.png','title'=>'MARKA OLUŞTURMA'],
            ['img'=>'mekan.png','title'=>'MEKAN ÇEKİMLERİ'],
            ['img'=>'urun.png','title'=>'ÜRÜN ÇEKİMLERİ'],
            ['img'=>'social-port.png','title'=>'SOSYAL MEDYA'],
            ['img'=>'web-port.png','title'=>'WEB TASARIM'],
            ['img'=>'develop.png','title'=>'YAZILIM HİZMETLERİ']

        ];
        $services = [
            ['img'=>'design_background.png','title'=>'TASARIM','url'=>'creative',
            'text'=>'Profesyonel ve yaratıcı tasarım hizmetleriyle marka kimliğinizi güçlendirerek dijital varlığınızı öne çıkarıyoruz.'
            ],
            ['img'=>'production_background.png','title'=>'PRODÜKSİYON','url'=>'prod',
            'text'=>'Profesyonel prodüksiyon hizmetleriyle markanızın hikâyesini güçlü, etkileyici ve yaratıcı video içeriklerle anlatıyoruz.'],
            ['img'=>'coding.png','title'=>'WEB & YAZILIM','url'=>'web',
            'text'=>'Modern, hızlı ve mobil uyumlu web tasarım çözümleriyle işletmenizin dijitalde güçlü görünmesini sağlıyoruz.'],
            ['img'=>'seo.png','title'=>'GOOGLE ADS & SEO','url'=>'seo',
            'text'=>'SEO odaklı stratejilerimizle web sitenizin arama motorlarında daha görünür olmasını ve trafik kazanmasını sağlıyoruz.'],
            ['img'=>'social.png','title'=>'SOSYAL MEDYA','url'=>'social',
            'text'=>'Etkili sosyal medya yönetimiyle markanızın etkileşimini artırıyor ve hedef kitlenize doğru içerik ulaştırıyoruz.']
        ];
        return view('index', compact('markalar', 'services','portfolios'));
    }
    public function members()
    {   
        $members = Members::orderBy('priority')->get();
        return view('members', compact('members'));
    }

    public function about()
    {   
        $markalar = Markalar::orderBy('priority')->get();
        return view('about',compact('markalar'));
    }

    public function services()
    {   

        return view('services');
    }

    public function portfolio()
    {   
        $webs = [
            ['file_path'=>'coskun_desktop.png','site'=>'https://coskunzeytincilik.com','name'=>'COSKUN ZEYTİNCLİK','category'=>'E-ticaret'],
            ['file_path'=>'barbun_desktop.png','site'=>'https://barbununcifligi.com','name'=>'BARBUNUN ÇİFTLİĞİ','category'=>'E-ticaret'],
            ['file_path'=>'eye_desktop.png','site'=>'https://www.eyetechgozluk.com/','name'=>'EYE TECH','category'=>'B2B'],
            ['file_path'=>'oloa_desktop.png','site'=>'https://www.oloacoffee.com/','name'=>'OLOA COFFE','category'=>'Kurumsal'],
            ['file_path'=>'gusto_desktop.png','site'=>'https://thegusto.com.tr','name'=>'THE GUSTO','category'=>'Kurumsal'],
            ['file_path'=>'cundali_desktop.png','site'=>'https://www.cundalitur.com/','name'=>'CUNDALİ TUR','category'=>'Kurumsal'],
        ];
        
        return view('portfolio',compact('webs'));
    }

    public function contact()
    {   
        return view('contact');
    }

    public function send_mail(Request $request)
    {
        try{
            $data = $_POST;


            Log::info('İletişim formu gönderildi:', $data);

            $phone = isset($data['phone']) ? $data['phone'] : '';     
            Mail::raw("
            İsim: {$data['name']}
            Email: {$data['email']}
            Telefon: {$phone}
            Mesaj: {$data['content']}
            ", function ($message) {
                $message->to('info@aynenajans.com')
                        ->subject('Yeni İletişim Formu Mesajı');
            });

            return response()->json(['status' => 'success',]);
        }catch(\Exception $e) {

            Log::error('Kayıt hatası: ' . $e->getMessage());

            return response()->json(['status' => 'fail',]);
        }
            
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
