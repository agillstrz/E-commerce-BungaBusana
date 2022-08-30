@extends('frontend.index')
@section('title')
    Kontak
@endsection
@section('conten')
<div class="container" style="margin-top: 80px;">
  <h1 class="text-center mt-2 p-4 text-capitalize fw-bold" style="color: #333333;">Kontak</h1>
    <div class="row text-center">   
        <div class="col-md-3 kontak p-5 bg-light">
             <a href="https://wa.me/6282281788810?text=Saya%20tertarik%20dengan%20produk%20yang%20anda%20jual" target="_blanks">
                 <img src="{{ asset('assets/images/whatsapp.png') }}" height="70px" alt="">
                <h2>Whatsapp</h2>
                <p>082281788810</p>
            </a>
             </div>  
         
        <div class="col-md-3  kontak p-5 bg-light">
             <a href="https://www.instagram.com/bungabusana22/" target="_blanks">
                 <img src="{{ asset('assets/images/instagram.png') }}" height="70px" alt="">
                <h2>Instagram</h2>
                <p>@bungabusana22</p>
            </a>
             </div>      

        <div class="col-md-3  kontak p-5 bg-light">
             <a href="mailto:agillstrz@gmail.com?subject = Feedback&body = Message" target="_blanks">
                 <img src="{{ asset('assets/images/email.png') }}" height="70px" alt="">
                <h2>Email</h2>
                <p>agillstrz@gmail.com</p>
            </a>
             </div>      
    
        <div class="col-md-3 kontak p-5 bg-light">
             <a href="">
                 <img src="{{ asset('assets/images/line.png') }}" height="70px" alt="">
                <h2>Line</h2>
                <p>agillstr</p>
            </a>
             </div> 

             <div class="col-md-12 mt-2 kontak bg-light">
                <a href="#alamat">
                   <img src="{{ asset('assets/images/alamat.png') }}" height="70px" alt="">
                   <h2>Indonesia</h2>
                   <h3>Jambi</h3>
                   <p>Tebo Tengah</p>
                </a>
               </div>   


</div> 
<iframe class="mb-5" id="alamat" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.24258932202!2d102.43995398283!3d-1.4811918716540493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ec0013949851b%3A0xa73c620faccaddac!2sTugu%20Sultan%20Thaha%20Tebo!5e0!3m2!1sid!2sid!4v1657069223403!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  
</div>

@endsection
