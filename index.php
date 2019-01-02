<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="ajax.js"></script>
    <title>SMP Negeri 2 Pekalongan</title>
</head>
<body onload="loadDoc('beranda.html',myFunction)">
    <div id="container">
     
        <div class="header"></div>
        <div>
            <ul>
            <li><a href="#" onclick="">SMP2 Pekalongan</a></li>
            <li><a href="#" onclick="">Beranda</a></li>
            <li><a href="#" onclick="loadDoc('news.html',myFunction)">News</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Tentang Kami</a>
              <div class="dropdown-content">
                <a href="#" onclick="loadDoc('profil.html',myFunction)">Profil</a>
                <a href="#" onclick="loadDoc('guru.html',myFunction)">Data Guru</a>
                <a href="#" onclick="loadDoc('tertib.html',myFunction)">Tata Terib</a>
              </div>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Layanan</a>
                <div class="dropdown-content">
                <a href="#" onclick="loadDoc('Layanan.html',myFunction)">Layanan BK</a>
                <a href="#" onclick="loadDoc('gleri.php',myFunction)">Galeri</a>
                <a href="#" onclick="loadDoc('dom.php',myFunction)">Kalkulator</a>
                </div>
        </div>
        <div>
        <marquee> Jalan Cendrawasih No. 11 Pekalongan</marquee>
    </div>             
        <div class="kiri">
            <div class=malasngoding-slider>
                <div class=isi-slider>
                    <img src="smp2.jpg" alt="Gambar 1">
                    <img src="smp22.jpg" alt="Gambar 2">
                    <img src="smp222.jpg" alt="Gambar 3">
                </div>
            </div>
        </div>
        <div class="kanan">
            <div class="stori">
                <ul>
                    <li><a class="active" href="#">Teratas</a></li>
                    <li><a href="#" onclick="loadDoc('news.html',myFunction)">Terbaru</a></li>
                    <li><a href="#" onclick="loadDoc('beranda.html',myFunction)">Komentar</a></li>
                </ul>
				
				<div id="tab1" style="display: block; ">
					<ul id="itemContainer" class="recent-tab">
											<li>
							<a href="ppdb15.jpg"><img width="225" height="136" src="ppdb15.jpg" class="thumb" alt="" /></a>
							<h4 class="post-title"><a href="#">Penerimaan Peserta Didik Baru PPDB Th. 2015/2016</a></h4>
							<div class="clearfix"></div>				
						</li>
											<li>
							<a href="mading.jpg"><img width="225" height="136" src="mading.jpg" class="thumb" alt="" /></a>
							<h4 class="post-title"><a href="#">Lomba Mading 3D Hilo</a></h4>
							<div class="clearfix"></div>				
						</li>
					
					<div class="holder clearfix"></div>
					<div class="clear"></div>
            </div>
        </div>

    </div> 

    </div>
        <article id="artikel">

    </article>

    <div class="post">
            <h3 class="title"><span>Profil Penulis</span></h3>
            <img src='dfh.jpg' width="200" height="135" alt='' class='imgauthor' />					
            
                <p>Nama:<b id="demo"></b><br>
                Usia:<b id="demo1"></b><br>
                Kota:<i id="demo2"></i><br>
                Pekerjaan:<b id="demo3"></b><br>
                <script>
                    var myJSON='{"name": "Akbar Febriandy Putra","age": 19,"city": "Pekalongan","job":["Penulis","Rektor"]}';
                    var myObj= JSON.parse(myJSON);
                    document.getElementById("demo").innerHTML = myObj.name;
                    document.getElementById("demo1").innerHTML = myObj.age;
                    document.getElementById("demo2").innerHTML = myObj.city;
                    var j="";//string kosong
                    for(i=0; i < myObj.job.length;i++){
                        j += myObj.job[i];
                        if(i!=myObj.job.length-1)
                        j += ", ";
                    }
                    document.getElementById("demo3").innerHTML = j;
                    </script>
                    <p>&nbsp;</p>
        </div>	

        <!-- #daftar komentar -->

        <div class="post comment">
            <ol class="commentlist">
                                <h3 class="title"><span>0 Komentar Pada Artikel Ini</span></h3>
                                </ol> <!-- End Comment-Lists -->
            <p>&nbsp;</p>
        </div>

        <!-- #form komentar -->

        <div class="post">
            <h3 class="title"><span>Tinggalkan Komentar</span></h3>
            <form class="contact-form" action="po-postcom.php" method="post">
                <div class="cform name">
                    <input type="text" name="name" id="cf_name" size="50" maxlength="50" value="" placeholder="Nama *" />
                </div>
                <div class="cform email">
                    <input type="text" name="email" id="cf_email" size="50" maxlength="50" value="" placeholder="E-mail *" />
                </div>
                <div class="cform website">
                    <input type="text" name="url" id="cf_subject" size="50" maxlength="50" value="" placeholder="Website *" />
                </div>
                <div class="clearfix"></div>
                <div>
                    <textarea name="comment" id="cf_message" cols="50" rows="3" placeholder="Isi pesan *"></textarea>
                </div>
                <div>
                    <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LeogOISAAAAACFiZE820X0RN5jOj0s7TNkJw2Ph"></script>

<noscript>
  <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeogOISAAAAACFiZE820X0RN5jOj0s7TNkJw2Ph" height="300" width="500" frameborder="0"></iframe><br/>
  <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
</noscript>							<input type="hidden" name="id" value="94" />
                    <input type="hidden" name="seotitle" value="pemilihan-ketua-osis" />
                    <input type="submit" value="Komentar" name="submit" id="cf_send" />
                </div>
            </form>
        </div>
</body>
</html>