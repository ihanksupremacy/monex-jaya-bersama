<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/home/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rasa:wght@300&family=Road+Rage&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Monex Jaya Bersama</title>
    <link rel="shortcut icon" href="/img/assets/logo.png" type="image/x-icon">
   
</head>



<div id="popup" class="popup">
    <p>Silakan pilih nomor WhatsApp yang ingin Anda hubungi:</p>
    <a href="whatsapp://send?text=Hello&phone=+6282281102424" target="">0822-8110-2424</a>
    <a href="whatsapp://send?text=Hello&phone=+6285274217131" target="">0852-7421-7131</a>
    <a href="#" onclick="hidePopup()">Tutup</a>
</div>

<script>
    function showPopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'block';
    }

    function hidePopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'none';
    }
</script>
<body>
    @include('navbar')
    <header style="">
        <img src="/img/mobil.png" alt="" style="">
        <div class="text">
            <h1>Rental Mobil Monex Jaya Bersama</h1>
            <p>Rental Mobil di Monex Jaya Bersama adalah solusi terbaik untuk Anda yang membutuhkan transportasi yang nyaman dan terjangkau. Kami menyediakan berbagai jenis mobil dengan harga yang kompetitif.</p>
            <a  href="whatsapp://send?text=Hello&phone=+6282281102424">kontak kami</a>
        </div>
    </header>
<hr size="2" color="black" style="max-width:90%;margin-top:100px;size:10;">
    <div class="isi">
        <h1 style="font-size: 2vw">Kenapa Memilih Kami ?</h1>
        <div class="cards-container">
            <div class="card">
                <img src="/img/assets/icon/car_tag.png" alt="">
                <h1>harga terjangkau</h1>
                <p>Rental Mobil Monex Jaya Bersama menawarkan harga yang kompetitif dan terjangkau untuk berbagai jenis mobil. Anda dapat menemukan mobil yang sesuai dengan kebutuhan dan anggaran Anda.</p>
            </div>
            <div class="card">
                <img src="/img/assets/icon/concierge.png" alt="">
                <h1>Pelayanan</h1>
                <p>Rental Mobil Monex Jaya Bersama memiliki tim profesional yang akan membantu Anda memilih mobil yang tepat dan memberikan layanan yang memuaskan..</p>
            </div>
            <div class="card">
                <img src="/img/assets/icon/chair.png" alt="">
                <h1>Kenyamanan</h1>
                <p>Komitment kami untuk kenyamanan konsumen tidak dapat di ragukan. pelanggan dapat memilih mobil sesuai dengan kebutuhan dan budget mereka</p>
            </div>
            <div class="card">
                <img src="/img/assets/icon/policy.png" alt="">
                <h1>Legalitas Jelas</h1>
                <p>Rental Mobil Monex Jaya Bersama merupakan Rental Mobil Terpercaya yang Berbadan Hukum yang legal dan jelas.</p>
            </div>  <div class="card">
                <img src="/img/assets/icon/no_crash.png" alt="">
                <h1>Pilihan Mobil Bervariasi</h1>
                <p>kami menawarkan pilihan mobil yang bervariasi, sehingga pelanggan memiliki pengamalan berkendara yang menyengangkan.</p>
            </div>
            <div class="card">
                <img src="/img/assets/icon/alarm_on.png" alt="">
                <h1>Fleksibel</h1>
                <p>Anda dapat menyewa mobil untuk jangka waktu yang singkat atau lama, sesuai dengan kebutuhan Anda</p>
            </div>
        </div>
    </div>
    <hr size="2" color="black" style="max-width:90%;margin-top:100px;size:10;">
    <div class="pilihan">
<h1>Pilihan Mobil</h1>
        <div class="container-pilihan">
            <div class="pilihan-card">
                <img src="/img/assets/mobil/pajero.png" alt="">
                <h1>Pajero Sport</h1>
                {{-- <p>Rp. 1.300.000 / Hari</p> --}}
                <div class="data-pilihan">
                    <a href="">
                        <img src="/img/driver.png" style="max-width: 3vw;height:auto; vertical-align: middle;" alt="supir">
                        <span style="vertical-align: middle;">Supir</span>
                    </a>
                    <a href="">
                        <img src="/img/109613.png" style="width: 2vw; vertical-align: middle;" alt="supir">
                        <span style="vertical-align: middle;">24 jam</span>
                    </a>
                </div>
                 
                     <a href="#" style="padding: 0.5vw 5vw ;margin-top:1vw;" onclick="showPopup()">Booking via WhatsApp</a>
            </div> 
            <div class="pilihan-card">
                <img src="/img/assets/mobil/innova.png" alt="">
                <h1>Innova Reborn</h1>
                {{-- <p>Rp. 1.300.000 / Hari</p> --}}
                <div class="data-pilihan">
                    <a href="">
                        <img src="/img/driver.png" style="max-width: 3vw;height:auto; vertical-align: middle;" alt="supir">
                        <span style="vertical-align: middle;">Supir/Non Supir</span>
                    </a>
            
                    <a href="">
                        <img src="/img/109613.png" style="width: 2vw; vertical-align: middle;" alt="supir">
                        <span style="vertical-align: middle;">24 jam</span>
                    </a>
                </div>
                 
                     <a href="#" style="padding: 0.5vw 5vw ;margin-top:1vw;" onclick="showPopup()">Booking via WhatsApp</a>
            </div>
            <div class="pilihan-card">
                <img src="/img/assets/mobil/hiace.png" alt="">
                <h1>Hiace</h1>
                {{-- <p>Rp. 1.300.000 / Hari</p> --}}
                <div class="data-pilihan">
                    <a href="">
                        <img src="/img/driver.png" style="max-width: 3vw;height:auto; vertical-align: middle;" alt="supir">
                        <span style="vertical-align: middle;">supir</span>
                    </a>
                
                    <a href="">
                        <img src="/img/bensin.png" style="width: 2vw; vertical-align: middle;" alt="supir">
                        <span style="vertical-align: middle;">Bbm</span>
                    </a>
                    <a href="" >
                        <img src="/img/109613.png" style="width: 2vw; vertical-align: middle;" alt="supir">
                        <span style="vertical-align: middle;">24 Jam</span>
                    </a>
                </div>
                 
                     <a href="#" style="padding: 0.5vw 5vw ;margin-top:1vw;" onclick="showPopup()">Booking via WhatsApp</a>
            </div>
        </div>
    </div>
    <div style="align-content: end;  display: flex;
    flex-wrap: wrap;
    justify-content: end;padding-right:140px">
        <div style="text-align: end;background:#D9D9D9;width:max-content;padding:20px;border-radius:20vh;text-decoration:none">
            <a href="/jenismobil" style=";text-decoration:none;color:black">jenis mobil lainnya</a> 
        </div>
    </div>

    <div class="galerimobil">
        <h1>Galeri Mobil
        </h1>
        <div class="card-galeri">
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/1.png" alt="">
            </div>
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/2.png" alt="">
            </div>
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/3.png" alt="">
            </div>
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/4.png" alt="">
            </div>
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/5.png" alt="">
            </div>
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/6.png" alt="">
            </div>
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/7.png" alt="">
            </div>
            <div class="card-galeri"> 
                <img src="/img/assets/galeri-mobil/8.png" alt="">
            </div>
          
    </div>
    </div>
    @include('footer')
    
    
    
</body>
</html>
