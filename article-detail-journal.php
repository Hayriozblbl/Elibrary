<?php include 'header.php';

 $para = array(
     ':id' => $_GET['id']
     
    
 );
$makalesor=$db->prepare("SELECT * FROM makale_arsive ORDER BY id=:id");
$makalesor->execute($para);
 

$makalecek=$makalesor->fetch(PDO::FETCH_ASSOC);





?>


<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
           <h2>Article</h2>
           <span class="underline center"></span>

       </div>
       <div class="breadcrumb">
        <ul>
         <li><a href="index.php">Home</a></li>
         <li>Articles</li>
     </ul>
 </div>
</div>
</section>
<!-- End: Page Banner -->




<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="booksmedia-detail-main">
                <div class="container">
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="booksmedia-detail-box">
                              <br><br>





                              <h3 align="center" font color="fff"><?php echo $makalecek['makale_ad']; ?></h3>     <br>                 


                              <div>
                                <p class="MsoNormal" style="margin-top:6pt;margin-right:42.45pt;margin-bottom:.0001pt;margin-left:2cm;text-align:justify;text-indent:14.2pt;line-height:normal;"><span style="font-size:10pt;font-family:'Times New Roman', serif;"><?php echo $makalecek['makale_yazar']; ?></p>

                                </div>
                            </div>

                            <div id="articleKeywords">
                                <h4 class="page-header">Anahtar Kelimeler</h4>

                                <div>
                                    Erzurum, Selçuklular, Saltuklular, Tepsi Minare, kûfî, kaligrafi, tipografi, font
                                </div>
                            </div>

                            <div id="articleCitations">
                                <h4 class="page-header">Kaynakça</h4>

                                <div>
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-quote-left"></i>Alyılmaz, C. (2005). Orhun yazıtlarının bugünkü durumu. Ankara.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Alyılmaz, C. (2007). (Kök)Türk harfli yazıtların izinde. Ankara.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Alyılmaz, C. (2011). Azerbaycan’daki Arap harfli yazıtların bugünkü durumu. Turkish Studies, International Periodical For The Languages, Literature and History of Turkish or Turkic, Volume 6/1, Ankara, 358-389.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Alyılmaz, C. ve Alyılmaz, S. (2010). Nahçıvan’daki eski Türk kültür ve uygarlık eserleri. Türk Dünyası Mimarlık ve Şehircilik Kurultayı Bildirileri, III, Ankara, 181-192.Arık, R. (1969). Erzurum’da iki cami. Vakıflar Dergisi, VIII, 149-159.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Aslanapa, O. (1990). Türk sanatı. Ankara.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Aslanapa, O. (2002). İlk müslüman Türk devletlerinde kültür ve sanat. Türkler, 6, Orta Çağ, Ankara, 9-45.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Babayar, G. (2014). Batı Köktürk ve Orta Asya Bozkır Hanlıklarının sikkelerindeki damgalar. Marmara Türkiyat Araştırmaları Dergisi, 1(1), İstanbul, s. 9-29.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Bakırer, Ö. (1971). Anadolu’da XIII. yüzyıl tuğla minarelerinin konum, şekil, malzeme ve tezyinat özellikleri. Vakıflar Dergisi, 9, Ankara, s. 337-366.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Bakırer, Ö. (1980). A Study on the use brickbands in Anatolian Seljuk Architecture. M.E.T.U. Journal of the Faculty of Architecture, 6(2), Ankara. 143-181.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Bakırer, Ö. (1982). Kufî yazıda geometrik yorumlar üzerine bir deneme. Arkeoloji-Sanat Tarihi Dergisi, I, İzmir, s. 1-20.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Beygu, A. Ş. (1936). Erzurum tarihi. anıtları, kitabeleri. istanbul.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Bonner, J. (2017). Islamic Geometric Patterns, Their Historical Development and Traditional Methods of Construction. New Mexico.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Brosset, M. (1843). Notice sur le Mari Russe de Thamar, reine de Georgie. Bulletin, de la classe des Sciences Historiques, Philologiques et Politiques de l’académie Impériale des Sciences, No: 14-15, Sain-Pétersbourg, 209-229.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Brosset, M. (1849). Historie de la Géorgie. S.-Pétersbourg.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Defrémery, C. (1848). Historie des Seldjoukides, Extraite du Tarikhi Guzideh, ou Historie choisie d’Hamd-Allah Mustafui, traduite et accompanée de notes. Journal Asiatique, Quatrième Série, Tome XI, M DCCC XLVIII, (Avril-Mai), Paris, 417-462.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Defrémery, C. (1848). Historie des Seldjoukides, Extraite du Tarikhi Guzideh, ou Historie choisie d’Hamd-Allah Mustafui, traduite et accompanée de notes. Journal Asiatique, Quatrième Série, Tome XII, M DCCC XLVIII, (Septembre), Paris, 259-279.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Defrémery, C. (1848). Historie des Seldjoukides, Extraite du Tarikhi Guzideh, ou Historie choisie d’Hamd-Allah Mustafui, traduite et accompanée de notes. Journal Asiatique, Quatrième Série, Tome XII, M DCCC XLVIII, (Octobre), Paris, 334-370.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Defrémery, C. (1849). Fragments de Géographes et d’Historiens Arabes et Persans Inédits. Journal Asiatique, Quatrième Série, Tome XIII, M DCCC XLIX, Paris, 457-522.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Defrémery, C. (1849). Historie des Seldjoukides, Extraite du Tarikhi Guzideh, ou Historie choisie d’Hamd-Allah Mustafui, traduite et accompanée de notes. Journal Asiatique, Quatrième Série, Tome XIII, M DCCC XLIX, (Janvier), Paris, 15-55.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Ettinghausen, R. (1970). The Flowering of Seljuq Art. Metropolitan Museum  Journal, Vol. 3, Chicago, 113-131.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Ettinghausen, R. (1975). İslamic art. The Metropolitan Museum of Art Bulletin, Spring, Volume XXXIII, 2, New York, 1-53.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Farid, A. (2014). A Comparison of Kufic plaster ınscriptions of the phrase “ın the name of God” in Iran (With an Emphasis on Seljuk and Ilkhanid Periods). Honar-Ha-Ye-Karbordi Journal of Art Faculty of Semnan University, 3/4, Summer, Semnan, 25-38.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Giyasi, J. (2013). Azerbaijan. The Artistic culture of Central Asia and Azerbaijan in the 9th-15th centuries, IV, Architecture, Samarkand-Tashkent, 216-264.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Gürbüz, O. (2002). Saltuklular. Yayımlanmamış Doktora Tezi, Erzurum: Atatürk Üniversitesi Sosyal Bilimler Enstitüsü.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Kafesoğlu, İ. (1972). Selçuklu tarihi. İstanbul.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Kara, F. (2017). Saltuklu dönemi Erzurum kitabeleri. Türk Dünyası, Dil ve Edebiyat Dergisi, 43, Ankara, 359-384.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Kılıç, E. (1997). Çağdaş Resim Sanatının oluşmasında Doğu ve İslam Sanatlarının etkisi. Güzel Sanatlar Enstitüsü Dergisi, 3, Erzurum, 49-70.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Kındığılı, M. L. (2018). Orta Asya’dan Anadolu’ya bir miras: Erzurum İç Kale Minaresi, Türkiyat Araştırmaları Enstitüsü Dergisi, 62, Erzurum, 251-282.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Konukçu, E. (2018). Saltuklu Emiri Gâzi devrine ait gözetleme kulesi.  Beyaz Şehir Palandöken  Kültür Sanat tarih Edebiyat,28, Erzurum, s. 8-10.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Konyalı, İ. H. (1960). Abideleri ve kitabeleri ile Erzurum tarihi. Ankara.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Küçük, C. (1995). Erzurum. TDV İslam Asiklopedisi. 11, İstanbul. 321-329.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Mau-Tsai, L. (2006). Çin kaynaklarına göre Doğu Türkleri. İstanbul.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Öney, G. (1992). Anadolu Selçuklu mimari süslemesi ve el sanatları. Ankara.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Özkan, H. (2016). Saltuklu mimarisi. Erzurum.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Sarıkavak, N. K. (1997). Tipografinin temelleri. Ankara.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>(Som), Nusret M. (2005). Tarihçe-i Erzurum. yay. haz. A. Fidan. İstanbul.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Sümer, F. (1971). Saltuklular. Selçuklu Araştırmaları Dergisi (Journal of Seljuk Studies) III’den ayrı basım, Ankara, 391-437.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Turan, O. (1998). Doğu Anadolu Türk devletleri tarihi. İstanbul.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Turan, O. (2009). Selçuklular târihi ve Türk-İslâm medeniyeti. İstanbul.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Tüfekçioğlu, A. (2002). Türk mimarisinde yazı. Türkler, 6, Orta Çağ, Ankara, 158-182.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Ünal, R. H. (1968). Les monuments Islamiques anciens de la ville d&#039;Erzurum et de sa region. Paris.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Yurttaş, H. (2001). Erzurum Ulu Camii’ne ait yeni bir kitabe ve yapı hakkında bazı düşünceler. Atatürk Üniversitesi Türkiyat Araştırmaları Dergisi, 17, Erzurum, 191-207.</li>
                                        <li><i class="fa-li fa fa-quote-left"></i>Zambaur, E. De. (1927). Généologie et de Chronologie pour l’historie de l’Islam. Hanovre.</li>
                                    </ul>
                                </div>
                            </div>

                            <div id="article_meta">
                                <h4 class="page-header">Ayrıntılar</h4>
                                <table class="record_properties table">
                                    <tr>
                                        <th>Birincil Dil</th>
                                        <td>
                                            tr
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Bölüm</th>
                                        <td>Makaleler</td>
                                    </tr>
                                    <tr>
                                        <th>Yazarlar</th>
                                        <td>
                                            <p id="author$1103533"><b>Yazar: </b>Levent  ALYAP</br><b>Ülke: </b>Turkey</p><hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tarihler</th>
                                        <td>
                                            <p>
                                                <b>Yayımlanma Tarihi
                                                :</b> 15 Mart 2019
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div id="article_cite">
                                <h4 class="page-header">Kaynak Göster</h4>
                                <table class="table table-striped">
                                    <tr>
                                        <td>Bibtex</td>
                                        <td><code>@araştırma makalesi { teke545654,
                                            journal = {Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi},
                                            issn = {2147-0146},
                                            address = {},
                                            publisher = {Atatürk Üniversitesi},
                                            year = {2019},
                                            volume = {8},
                                            pages = {1 - 27},
                                            doi = {},
                                            title = {SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE},
                                            key = {cite},
                                            author = {ALYAP,  Levent}
                                        }</code></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <abbr tooltip="Author, A.A.. (Publication Year). Article title. Periodical Title, Volume(Issue), pp.-pp. doi:XX.XXXXX or Retrieved from journal URL">APA</abbr>
                                        </td>
                                        <td>                                                                                    ALYAP, L
                                            .
                                            (2019).
                                            SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE.
                                            Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi
                                            , 8 (1)                                        ,
                                            1-27                                        .
                                        Retrieved from https://dergipark.org.tr/tr/pub/teke/issue/44335/545654                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <abbr tooltip="Last Name, First Name. “Article Title.” Journal Name Volume Number (Year Published): Page Numbers. Medium.">MLA</abbr>
                                        </td>
                                        <td>
                                            ALYAP, L
                                            .
                                            "SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE".
                                            Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi  8                                         (2019
                                            ): 1-27                                        &lt;https://dergipark.org.tr/tr/pub/teke/issue/44335/545654&gt;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <abbr tooltip="Last Name, First Name. “Article Title.” Journal Name Volume Number (Year Published): Page Numbers.">Chicago</abbr>
                                        </td>
                                        <td>
                                            ALYAP, L
                                            .
                                            "SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE".
                                            Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi  8                                         (2019
                                        ): 1-27                                    </td>
                                    </tr>
                                    <tr>
                                        <td>RIS</td>
                                        <td>
                                            TY - JOUR
                                            T1 - SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE
                                            AU -                                                                                             Levent  ALYAP
                                            Y1 - 2019
                                            PY - 2019
                                            N1
                                            -                                         DO
                                            -                                         T2 - Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi
                                            JF - Journal
                                            JO - JOR
                                            SP - 1
                                            EP - 27
                                            VL - 8
                                            IS - 1
                                            SN - 2147-0146-
                                            M3
                                            -                                         UR
                                            -                                         Y2 - 2019
                                            ER -

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>EndNote</td>
                                        <td>
                                            %0 Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE
                                            %A                                                                                             Levent  ALYAP
                                            %T SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE
                                            %D 2019
                                            %J Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi
                                            %P 2147-0146-
                                            %V 8
                                            %N 1
                                        %R                                         %U                                     </td>
                                    </tr>
                                    <tr>
                                        <td>ISNAD</td>
                                        <td>
                                            ALYAP, Levent
                                            .
                                            "SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE". Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi
                                            8
                                            /
                                            1
                                            (Mart 2019):
                                            1-27
                                        .                                     </td>
                                    </tr>
                                    <tr>
                                        <td>AMA</td>
                                        <td>
                                            ALYAP L
                                            .
                                            SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE.
                                            Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi.
                                            2019;
                                            8(1):
                                            1-27.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vancouver</td>
                                        <td>
                                            ALYAP L
                                            .
                                            SALTUKLU ESERLERİNDEN TEPSİ MİNARE ÜZERİNDEKİ KÛFÎ KİTABENİN KALİGRAFİSİ ÜZERİNE.
                                            Uluslararası Türkçe Edebiyat Kültür Eğitim (TEKE) Dergisi.
                                            2019;
                                            8(1):
                                            27-1.
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <hr>
                            <div id="articlePreview">
                                <a href="/tr/download/article-file/681474"
                                class="btn btn-lg btn-primary" target="_blank"><i
                                class="fa fa-download"></i> Tam Metin
                                <small>
                                    ( <i class="fa fa-arrow-circle-o-down"></i>
                                    <span class="article-stats-total-download"></span>
                                    )
                                </small>
                            </a>
                        </div>

                    </div>
                </div>

                <button type="button" class="btn btn-primary">Download PDF</button> <br> <br>

            </div>
        </div>

    </div>
</div>
</div>
</main>
</div>
</div>

<?php include'footer.php'; ?>