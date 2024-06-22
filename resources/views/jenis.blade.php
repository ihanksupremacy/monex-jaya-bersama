<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/jenis/style.css">
    <link rel="shortcut icon" href="/img/assets/logo.png" type="image/x-icon">
    <title>Jenis Mobil</title>


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
</head>
<body>
    @include('navbar')
    <header>
      <H1 style="font-size:3vw;">Temukan Beberapa Kendaraan Kami </H1>
        <img src="/img/assets/mobil/3mobil.png" alt="">
    </header>
    <div class="pilihan">
        <h1>Dibawah Ini Adalah  Jenis-Jenis Mobil Yang Kami Tawarkan Untuk Anda.</h1>
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
                        <img src="/img/assets/mobil/fortuner.png" alt="">
                        <h1>Fortuner</h1>
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
                        <img src="/img/assets/mobil/2kabin.png" alt="">
                        <h1>Double Cabin</h1>
                        {{-- <p>Rp. 900.000 / Hari</p> --}}
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
                            <a href="">
                                <img src="/img/109613.png" style="width: 2vw; vertical-align: middle;" alt="supir">
                                <span style="vertical-align: middle;">24 Jam</span>
                            </a>
                        </div>
                         
                             <a href="#" style="padding: 0.5vw 5vw ;margin-top:1vw;" onclick="showPopup()">Booking via WhatsApp</a>
                    </div>
                    <div class="pilihan-card">
                        <div class="mobil">
                        <img src="/img/assets/mobil/avanza.png" alt="">
                        <h1>Avanza All New CVT</h1>
                        {{-- <p>Rp. 400.000 / Hari</p> --}}
                    </div>
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
                        <div class="mobil">
                            <img src="/img/assets/mobil/xenia.png" alt="">
                            <h1>Xenia Facelift</h1>
                            {{-- <p>Rp. 400.000 / Hari</p> --}}
                        </div>                      
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
                        <img src="/img/assets/mobil/rush.png" alt="">
                        <h1>Toyota Rush</h1>
                        {{-- <p>Rp. 400.000 / Hari</p> --}}
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
                        <img src="/img/assets/mobil/terios.png" alt="">
                        <h1>Daihatsu Terios</h1>
                        {{-- <p>Rp. 400.000 / Hari</p> --}}
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
                        <img src="/img/assets/mobil/ayla.png" alt="">
                        <h1>Toyota Ayla</h1>
                        {{-- <p>Rp. 300.000 / Hari</p> --}}
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
                        <img src="/img/assets/mobil/brio.png" alt="">
                        <h1>Honda Brio</h1>
                        {{-- <p>Rp. 300.000 / Hari</p> --}}
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
            
                </div>
            </div>
            @include('footer')
</body>
</html>