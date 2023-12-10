<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DaftarAnime;

class DaftarAnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        // // DaftarAnime::factory()->create();

        // DaftarAnime::create ([
        //     'title' => '',
        //     'category_id' => ,
        //     'user_id' => ,
        //     'slug' => '',
        //     'genre' => '',
        //     'excerpt' => '',
        //     'body' => ''
        // ]);

        DaftarAnime::create ([
            'title' => 'ONE PIECE',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'one-piece',
            'genre' => 'Adventure, Fantasy, Shounen',
            'excerpt' => 'One Piece menceritakan petualangan seorang karakter bernama Monkey D. Luffy (Luffy) yang berbeda dari para bajak laut lainnya. Bukannya memamerkan kekerasan dan kejahatan, atau mengejar nama besar, Luffy justru lebih terlihat seolah ia hanyalah awak kapal bajak laut rendahan yang cengengesan sebuah penampilan yang menipu.',
            'body' => '<p class="indents">One Piece menceritakan petualangan seorang karakter bernama Monkey D. Luffy (Luffy) yang berbeda dari para bajak laut lainnya. Bukannya memamerkan kekerasan dan kejahatan, atau mengejar nama besar, Luffy justru lebih terlihat seolah ia hanyalah awak kapal bajak laut rendahan yang cengengesan  sebuah penampilan yang menipu.</p><p class="indents">Keinginan Luffy untuk menjadi seorang bajak laut dilandasi oleh tekadnya agar bisa berpetualang di lautan lepas dan bertemu orang-orang baru yang menarik, serta untuk menemukan harta karun legendaris bernama One Piece. Karena itulah Luffy, yang sudah mengumpulkan para kru yang juga sahabat-sahabat baiknya, mengarungi lautan untuk mencapai Grand Line, seperti yang dilakukan oleh pahlawan masa kecilnya. Sepanjang petualangannya, Luffy dan kawan-kawannya telah menghadapi berbagai misteri gelap dan melawan musuh-musuh kuat demi bisa mendapatkan One Piece.</p><p class="indents">Sejak cerita ini dimulai, One Piece telah melalui berbagai arc penting yang menentukan, termasuk Arc Reverie berikut ini.</p><p><b>Arc Reverie One Piece</b></p><p class="indents">Selanjutnya dalam petualangan One Piece di Arc Reverie. Di sini, semua perwakilan para pemimpin di seluruh dunia menggelar sebuah pertemuan untuk membicarakan aksi Luffy dan kelompok bajak lautnya. Berdasarkan kabar, kelompok bajak laut Luffy telah sukses mengalahkan Charlote Linlin alias Big Mom, yang merupakan salah satu bajak laut Yonkou. Hanya saja, kabar tersebut sebenarnya merupakan isu yang dilebih-lebihkan oleh Morgans. Dari seluruh perwakilan negara di dunia tersebut, empat di antaranya berasal dari Kerajaan Dressrosa, Kerajaan Ryuugu, Alabasta, dan Kerajaan Drum, yang pernah diselamatkan oleh Luffy dan kawan-kawannya.</p><p class="indents">Hanya saja, yang sibuk di dalam arc ini bukan hanya para pemimpin negara di seluruh dunia, tapi juga sebuah kelompok yang menamakan dirinya sebagai Pasukan Revolusi. Pasukan ini merupakan sebuah kelompok pemberontak yang punya misi untuk menggulingkan pemerintahan para naga langit, alias Tenryuubito, yang dianggap konyol.</p><p class="indents">Para komandan pemimpin Pasukan Revolusi pun mengadakan pertemuan mereka sendiri. Mereka adalah Lindbergh, Karasu, Belo Betty, dan Morley, yang masing-masing dari mereka memiliki kekuatan unik yang sudah diungkapkan dalam cerita yang berlangsung.</p><p class="indents">Kehebohan pertemuan yang digelar oleh berbagai sudut tersebut mendapatkan perhatian Akainu, sang laksamana tertinggi, serta memicu kemarahannya. Pasalnya, Akainu teringat bahwa dulu ia pernah membiarkan anak Dragon lolos hidup-hidup dalam peperangan besar yang berlangsung di Marineford lama. Akibatnya, timbul kekacauan besar karena Monkey D. Luffy merupakan salah satu sosok yang memiliki inisial D.</p><p><b>Arc Negeri Wano</b></p><p class="indents">Episode-episode di dalam arc ke-13 One Piece adalah kelanjutan dari Arc Reverie. Di sini, Aliansi Ninja-Bajak Laut-Mink-Samurai sudah mulai merekrut anggota baru di Negeri Wano dengan tujuan untuk melengserkan pemimpin tiran dari Shogun yang masih berkuasa hingga saat ini, Kurozumi Orochi dari Bajak Laut Binatang Puas.</p><p class="indents">Pada saat yang bersamaan, Bajak Laut Big Mom juga berambisi untuk mengejar kelompok bajak laut Luffy, yaitu kelompok bajak laut Topi Jerami, hingga ke Negeri Wano berkat ulah mereka di Whole Cake Island sebelumnya. Akibatnya, dalam satu wilayah tersebut, terdapat dua Yonkou yang ngotot ingin mengejar Luffy dan kawan-kawannya. Dan Big Mom sudah sampai di Negeri Wano, namun sayangnya karena serangan dari King, Big Mom jatuh ke laut dan ditemukan di pantai Kuri oleh Chopper dkk dalam keadaan hilang ingatan. Apakah nantinya Big Mom akan jadi aliansi Luffy? Atau justru sebaliknya?</p><p class="indents">Dan apakah Luffy dan teman-temannya akhirnya sukses menggulingkan kekuasaan Shogun Orochi ketika mereka juga sedang diburu oleh kedua Yonkou?</p>'
        ]);
        
        DaftarAnime::create ([
            'title' => 'KIMETSU NO YAIBA',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'kimetsu-no-yaiba',
            'genre' => 'Award Winning, Fantasy, Historical, Shounen',
            'excerpt' => 'Sejak kematian ayahnya, beban menghidupi keluarga berada di pundak Tanjirou Kamado. Meski hidup melarat di gunung terpencil, keluarga Kamado bisa menikmati kehidupan yang relatif damai dan bahagia. Suatu hari, Tanjirou memutuskan untuk pergi ke desa setempat untuk menghasilkan sedikit uang dengan menjual arang.',
            'body' => '<p class="indents">Sejak kematian ayahnya, beban menghidupi keluarga berada di pundak Tanjirou Kamado. Meski hidup melarat di gunung terpencil, keluarga Kamado bisa menikmati kehidupan yang relatif damai dan bahagia. Suatu hari, Tanjirou memutuskan untuk pergi ke desa setempat untuk menghasilkan sedikit uang dengan menjual arang. Dalam perjalanan pulang, malam tiba, memaksa Tanjirou berlindung di rumah seorang pria aneh, yang memperingatkannya tentang keberadaan setan pemakan daging yang mengintai di hutan pada malam hari.</p><p class="indents">Ketika dia akhirnya tiba di rumah keesokan harinya, dia bertemu dengan pemandangan yang mengerikan  seluruh keluarganya telah dibantai. Lebih buruk lagi, satu-satunya yang selamat adalah saudara perempuannya Nezuko, yang telah berubah menjadi iblis yang haus darah. Dikonsumsi oleh amarah dan kebencian, Tanjirou bersumpah untuk membalaskan dendam keluarganya dan tinggal bersama satu-satunya saudara kandungnya yang tersisa. Bersamaan dengan kelompok misterius yang menyebut diri mereka Korps Pembunuh Iblis, Tanjirou akan melakukan apa pun untuk membunuh iblis dan melindungi sisa-sisa kemanusiaan saudara perempuan tercintanya.</p>'
        ]);

        DaftarAnime::create ([
            'title' => 'TOKYO GHOUL',
            'category_id' => 1,
            'user_id' => 2,
            'slug' => 'tokyo-ghoul',
            'genre' => 'Fantasy, Horror Gore, Psychological, Seinen',
            'excerpt' => 'Ancaman jahat menyerang Tokyo: "hantu" pemakan daging yang tampak identik dengan manusia dan berbaur dengan populasi mereka. Mahasiswa pendiam Ken Kaneki mengubur hidungnya di buku dan menghindari berita tentang krisis yang berkembang. Namun, penampilan seorang wanita menarik bernama Rize Kamishiro menghancurkan kesendiriannya.',
            'body' => '<p class="indents">Ancaman jahat menyerang Tokyo: "hantu" pemakan daging yang tampak identik dengan manusia dan berbaur dengan populasi mereka. Mahasiswa pendiam Ken Kaneki mengubur hidungnya di buku dan menghindari berita tentang krisis yang berkembang. Namun, penampilan seorang wanita menarik bernama Rize Kamishiro menghancurkan kesendiriannya saat dia terus terang mengajaknya berkencan.</p><p class="indents">Saat berjalan pulang Rize, Kaneki menemukan dia tidak sebaik dia pertama kali muncul, dan dia telah membimbingnya dengan niat jahat. Setelah perjuangan yang tragis, dia kemudian terbangun di rumah sakit untuk mengetahui bahwa hidupnya telah diselamatkan dengan mentransplantasikan organ Rize yang sudah meninggal ke dalam tubuhnya sendiri.</p><p class="indents">Tubuh Kaneki mulai berubah dengan cara yang mengerikan, dan dia berubah menjadi manusia - hantu hibrida. Saat dia memulai perjalanan barunya yang mengerikan, Kaneki berpegang teguh pada kemanusiaannya dalam konflik berdarah yang berkembang antara monster baru masyarakat dan agen pemerintah yang memburu mereka.</p>'
        ]);

        DaftarAnime::create ([
            'title' => 'OSHI NO KO',
            'category_id' => 4,
            'user_id' => 2,
            'slug' => 'oshi-no-ko',
            'genre' => 'Drama, Supernatural, Reincarnation, Showbiz',
            'excerpt' => 'Ai Hoshino yang berusia enam belas tahun adalah idola berbakat dan cantik yang dipuja oleh para penggemarnya. Dia adalah personifikasi dari gadis muda yang murni. Tapi semua yang berkilau itu bukanlah emas. Gorou Amemiya adalah seorang ginekolog pedesaan dan penggemar berat Ai.',
            'body' => '<p class="indents">Ai Hoshino yang berusia enam belas tahun adalah idola berbakat dan cantik yang dipuja oleh para penggemarnya. Dia adalah personifikasi dari gadis muda yang murni. Tapi semua yang berkilau itu bukanlah emas. Gorou Amemiya adalah seorang ginekolog pedesaan dan penggemar berat Ai. Jadi ketika idola yang sedang hamil itu muncul di rumah sakitnya, dia sangat bingung.</p><p class="indents">Gorou menjanjikannya pengiriman yang aman. Sedikit yang dia tahu, pertemuan dengan sosok misterius akan mengakibatkan kematiannya sebelum waktunya - atau begitulah yang dia pikirkan.</p><p class="indents">Membuka matanya di pangkuan idola kesayangannya, Gorou menemukan bahwa dia telah terlahir kembali sebagai Aquamarine Hoshino - putra Ai yang baru lahir ! Dengan dunianya yang terbalik, Gorou segera mengetahui bahwa dunia showbiz diaspal dengan duri, di mana bakat tidak selalu menghasilkan kesuksesan. Akankah dia berhasil melindungi senyum Ai yang sangat dia cintai dengan bantuan sekutu yang eksentrik dan tak terduga?</p>'
        ]);
        
        DaftarAnime::create ([
            'title' => 'JIGOKURAKU',
            'category_id' => 1,
            'user_id' => 3,
            'slug' => 'jigokuraku',
            'genre' => 'Adventure, Fantasy, Gore, Historical, Shounen',
            'excerpt' => 'Gabimaru the Hollow, seorang ninja dari Desa Iwagakure yang dikenal dingin dan tanpa emosi, dijebak oleh sesama ninja dan sekarang berada di hukuman mati. Bosan membunuh dan berkhianat, dia ingin mati. Namun, tidak ada metode eksekusi yang berhasil padanya karena meskipun Gabimaru yang tampaknya apatis menolak untuk mengakuinya,',
            'body' => '<p class="indents">Gabimaru the Hollow, seorang ninja dari Desa Iwagakure yang dikenal dingin dan tanpa emosi, dijebak oleh sesama ninja dan sekarang berada di hukuman mati. Bosan membunuh dan berkhianat, dia ingin mati. Namun, tidak ada metode eksekusi yang berhasil padanya karena meskipun Gabimaru yang tampaknya apatis menolak untuk mengakuinya, dia memiliki alasan untuk hidup. Dia ingin kembali ke istrinya, yang menjadi alasan mengapa dia melunak dan gagal menjadi pembunuh yang efektif. Karena itu, dia menolak untuk mati.</p><p class="indents">Asaemon the Decapitator, seorang algojo terkenal, melihat ini dan memiliki proposal untuk ninja. Dia ingin Gabimaru bergabung dalam ekspedisi ke sebuah pulau di selatan Jepang untuk mencari ramuan kehidupan dengan imbalan pengampunan penuh dari Keshogunan. Namun, pulau ini bukanlah pulau biasa: diyakini sebagai Surga.</p><p class="indents">Namun pulau itu penuh dengan misteri, dan tim penjelajah - terdiri dari mereka yang ditandai mati - mungkin tidak sepenuhnya siap untuk menanganinya.</p>'
        ]);
        
        DaftarAnime::create ([
            'title' => 'MY HOME HERO',
            'category_id' => 4,
            'user_id' => 3,
            'slug' => 'my-home-hero',
            'genre' => 'Drama, Suspense, Adult Cast, Organized Crime',
            'excerpt' => 'Tetsuo Tosu, seorang pegawai biasa, menemukan putrinya, Reika, telah disiksa secara fisik oleh pacarnya, Matori Nobuto. Mencoba untuk mempelajari lebih lanjut tentang dia, Tetsuo mengungkap skema Matori untuk memeras uang dari kakek nenek Reika yang kaya, dan mengetahui bahwa dia adalah anggota sindikat kejahatan, dengan riwayat',
            'body' => '<p class="indents">Tetsuo Tosu, seorang pegawai biasa, menemukan putrinya, Reika, telah disiksa secara fisik oleh pacarnya, Matori Nobuto. Mencoba untuk mempelajari lebih lanjut tentang dia, Tetsuo mengungkap skema Matori untuk memeras uang dari kakek nenek Reika yang kaya, dan mengetahui bahwa dia adalah anggota sindikat kejahatan, dengan riwayat pembunuhan mantan pacarnya.</p><p class="indents">Dipenuhi amarah dan ketakutan memikirkan Reika berada dalam bahaya, Tetsuo akhirnya membunuh Nobuto, dan dengan bantuan istrinya, Kasen, berhasil membuang tubuhnya. Sekarang, ketika anggota sindikat mulai mempertanyakan hilangnya Nobuto yang tiba-tiba, Tetsuo dan Kasen harus bekerja sama untuk memastikan keselamatan putri mereka dan mencegahnya terlibat lebih jauh dalam kesulitan.</p>'
        ]);
        
        DaftarAnime::create ([
            'title' => '5-TOUBUN NO HANAYOME',
            'category_id' => 3,
            'user_id' => 3,
            'slug' => '5-toubun-no-hanayome',
            'genre' => 'Comedy, Romance, Harem, School',
            'excerpt' => 'Fuutarou Uesugi adalah siswa sekolah menengah ace, tetapi menjalani kehidupan yang sulit. Kepribadiannya yang angkuh dan sifat penyendiri membuatnya tidak punya teman, dan ayahnya dililit hutang, memaksa keluarganya untuk bertahan hidup. Suatu hari saat istirahat makan siang, Uesugi berdebat dengan seorang siswi pindahan yang telah mengklaim',
            'body' => '<p class="indents">Fuutarou Uesugi adalah siswa sekolah menengah ace, tetapi menjalani kehidupan yang sulit. Kepribadiannya yang angkuh dan sifat penyendiri membuatnya tidak punya teman, dan ayahnya dililit hutang, memaksa keluarganya untuk bertahan hidup.</p><p class="indents">Suatu hari saat istirahat makan siang, Uesugi berdebat dengan seorang siswi pindahan yang telah mengklaim "tempat duduknya", membuat keduanya tidak menyukai satu sama lain. Pada hari yang sama, dia diberi kesempatan emas untuk melunasi hutang keluarganya : pertunjukan les privat untuk putri keluarga kaya, dengan upah lima kali lipat dari harga pasar. Dia menerima lamaran itu, tetapi ngeri mengetahui bahwa kliennya, Itsuki Nakano, adalah gadis yang dia hadapi sebelumnya!</p><p class="indents">Setelah gagal mencoba untuk kembali ke sisi baik Itsuki, Uesugi menemukan bahwa masalahnya tidak berakhir di sana : Itsuki sebenarnya adalah kembar lima, jadi selain dia, dia juga harus mengajari saudara perempuannya - Miku, Yotsuba, Nino, dan Ichika - yang, terlepas dari ancaman gagal yang sangat nyata, tidak ingin berurusan dengan tutor. Namun, mata pencaharian keluarganya dipertaruhkan sehingga Uesugi terus maju, bersikeras dalam tekadnya untuk menghilangkan kebencian para suster untuk belajar dan berhasil memimpin mereka untuk lulus.</p>'
        ]);

        DaftarAnime::create ([
            'title' => 'HAIKYUU!!',
            'category_id' => 3,
            'user_id' => 1,
            'slug' => 'haikyuu!!',
            'genre' => 'Sports, School, Team Sports',
            'excerpt' => 'Sejak menyaksikan "Raksasa Kecil" dan kemampuannya yang menakjubkan di lapangan voli, Shouyou Hinata telah terpesona oleh sifat dinamis dari olahraga tersebut. Meskipun usahanya untuk memulai debutnya sebagai pemain reguler bola voli selama turnamen sekolah menengah gagal, dia ingin sekali membuktikan bahwa tinggi badannya',
            'body' => '<p class="indents">Sejak menyaksikan "Raksasa Kecil" dan kemampuannya yang menakjubkan di lapangan voli, Shouyou Hinata telah terpesona oleh sifat dinamis dari olahraga tersebut. Meskipun usahanya untuk memulai debutnya sebagai pemain reguler bola voli selama turnamen sekolah menengah gagal, dia ingin sekali membuktikan bahwa tinggi badannya yang kurang mengesankan tidak lagi menjadi penghalang di hadapan kemauan dan ketekunannya.</p><p class="indents">Ketika Hinata mendaftar di SMA Karasuno, almamater Raksasa Kecil, dia percaya bahwa dia selangkah lebih dekat dengan cita-citanya menjadi pemain bola voli profesional. Meskipun sekolah hanya mempertahankan bayang-bayang kejayaannya, keyakinan Hinata tidak tergoyahkan sampai dia mengetahui bahwa Tobio Kageyama—anak ajaib yang mempermalukan tim bola voli sekolah menengah Hinata dalam kekalahan telak—sekarang menjadi rekan setimnya.</p><p class="indents">Untuk memenuhi keinginannya untuk meninggalkan jejak di dunia bola voli—yang sering dianggap sebagai domain dari yang tinggi dan kuat—Hinata harus memuluskan perbedaannya dengan Kageyama. Hanya ketika Hinata mempelajari apa yang diperlukan untuk menjadi bagian dari sebuah tim barulah dia dapat bergabung dalam perlombaan menuju puncak dengan sungguh-sungguh.</p>'
        ]);

        DaftarAnime::create ([
            'title' => 'FULLMETAL ALCHEMIST',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'fullmetal-alchemist',
            'genre' => 'Action, Drama, Fantasy, Military, Shounen',
            'excerpt' => 'Setelah eksperimen alkimia yang mengerikan berjalan salah di rumah tangga Elric, Edward dan Alphonse bersaudara ditinggalkan dalam realitas baru yang membawa bencana. Mengabaikan prinsip alkimia yang melarang transmutasi manusia, anak laki-laki itu berusaha menghidupkan kembali ibu mereka yang baru saja meninggal. Sebaliknya, mereka',
            'body' => '<p class="indents">Setelah eksperimen alkimia yang mengerikan berjalan salah di rumah tangga Elric, Edward dan Alphonse bersaudara ditinggalkan dalam realitas baru yang membawa bencana. Mengabaikan prinsip alkimia yang melarang transmutasi manusia, anak laki-laki itu berusaha menghidupkan kembali ibu mereka yang baru saja meninggal. Sebaliknya, mereka menderita kerugian pribadi yang brutal : tubuh Alphonse hancur sementara Edward kehilangan satu kaki dan kemudian mengorbankan lengan untuk menjaga jiwa Alphonse di dunia fisik dengan mengikatnya ke baju zirah raksasa.</p><p class="indents">Saudara-saudara diselamatkan oleh tetangga mereka Pinako Rockbell dan cucunya Winry. Dikenal sebagai ahli teknik bio-mekanis, Winry menciptakan kaki palsu untuk Edward dengan memanfaatkan "automail", logam yang tangguh dan serbaguna yang digunakan dalam robot dan baju besi tempur. Setelah bertahun-tahun pelatihan, Elric bersaudara memulai pencarian untuk memulihkan tubuh mereka dengan menemukan Batu Bertuah - permata yang kuat yang memungkinkan seorang alkemis untuk menentang hukum tradisional Pertukaran Setara.</p><p class="indents">Saat Edward menjadi alkemis terkenal dan mendapatkan julukan "Fullmetal", perjalanan anak laki-laki itu melibatkan mereka dalam konspirasi yang berkembang yang mengancam nasib dunia.</p>'
        ]);

        DaftarAnime::create ([
            'title' => 'STEINS;GATE',
            'category_id' => 5,
            'user_id' => 3,
            'slug' => 'steins-gate',
            'genre' => 'Drama, Sci-Fi, Suspense, Psychological',
            'excerpt' => 'Ilmuwan eksentrik Rintarou Okabe selalu haus akan eksplorasi ilmiah. Bersama dengan temannya yang bodoh namun bermaksud baik Mayuri Shiina dan teman sekamarnya Itaru Hashida, Rintarou mendirikan Laboratorium Gadget Masa Depan dengan harapan dapat menciptakan inovasi teknologi yang membingungkan jiwa manusia. Terlepas dari klaim',
            'body' => '<p class="indents">Ilmuwan eksentrik Rintarou Okabe selalu haus akan eksplorasi ilmiah. Bersama dengan temannya yang bodoh namun bermaksud baik Mayuri Shiina dan teman sekamarnya Itaru Hashida, Rintarou mendirikan Laboratorium Gadget Masa Depan dengan harapan dapat menciptakan inovasi teknologi yang membingungkan jiwa manusia. Terlepas dari klaim kemegahannya, satu-satunya "gadget" terkenal yang diciptakan ketiganya adalah microwave yang memiliki kekuatan menakjubkan untuk mengubah pisang menjadi goo hijau.</p><p class="indents">Namun, ketika Rintarou memutuskan untuk menghadiri konferensi ahli saraf Kurisu Makise tentang perjalanan waktu, dia mengalami serangkaian kejadian aneh yang membuatnya percaya bahwa ada lebih banyak gadget "Microwave Telepon" daripada yang terlihat. Rupanya bisa mengirim pesan teks ke masa lalu menggunakan microwave, Rintarou mencoba-coba lebih jauh dengan "mesin waktu", menarik kemarahan dan perhatian organisasi misterius SERN.</p><p class="indents">Karena penemuan baru tersebut, Rintarou dan teman-temannya menemukan diri mereka dalam bahaya yang selalu ada. Saat dia bekerja untuk mengurangi kerusakan yang disebabkan oleh penemuannya pada garis waktu, dia tidak hanya bertempur untuk menyelamatkan orang yang dicintainya, tetapi juga melawan kewarasannya yang merosot.</p>'
        ]);

        DaftarAnime::create ([
            'title' => 'CODE GEASS',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'code-geass',
            'genre' => 'Award Winning, Drama, Sci-Fi, Mecha, Military, School, Super Power',
            'excerpt' => 'Pada tahun 2010, Kerajaan Suci Britannia memantapkan dirinya sebagai negara militer yang dominan, dimulai dengan penaklukan Jepang. Berganti nama menjadi Area 11 setelah kekalahannya yang cepat, Jepang telah melihat perlawanan yang signifikan terhadap para tiran ini dalam upaya untuk mendapatkan kembali',
            'body' => '<p class="indents">Pada tahun 2010, Kerajaan Suci Britannia memantapkan dirinya sebagai negara militer yang dominan, dimulai dengan penaklukan Jepang. Berganti nama menjadi Area 11 setelah kekalahannya yang cepat, Jepang telah melihat perlawanan yang signifikan terhadap para tiran ini dalam upaya untuk mendapatkan kembali kemerdekaannya.</p><p class="indents">Lelouch Lamperouge, seorang siswa Inggris, sayangnya mendapati dirinya terjebak dalam baku tembak antara Britannian dan angkatan bersenjata pemberontak Area 11. Namun, dia dapat melarikan diri berkat kemunculan tepat waktu dari seorang gadis misterius bernama C.C., yang menganugerahkan kepadanya Geass, "Kekuatan Para Raja". Menyadari potensi besar dari "kekuatan kepatuhan mutlak" yang baru ditemukannya, Lelouch memulai perjalanan berbahaya sebagai penjahat bertopeng yang dikenal sebagai Zero, memimpin serangan tanpa ampun terhadap Britannia untuk membalas dendam untuk selamanya.</p>'
        ]);

        DaftarAnime::create ([
            'title' => 'DEATH NOTE',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'death-note',
            'genre' => 'Supernatural, Suspense, Detective, Psychological',
            'excerpt' => 'Pembunuhan brutal, pencurian kecil - kecilan, dan kekerasan yang tidak masuk akal mencemari dunia manusia. Sebaliknya, alam dewa kematian adalah sarang perjudian yang membosankan dan tidak berubah. Pelajar Jepang berusia 17 tahun yang cerdik, Light Yagami, dan dewa kematian Ryuk yang sadis berbagi satu keyakinan : dunia mereka busuk.',
            'body' => '<p class="indents">Pembunuhan brutal, pencurian kecil - kecilan, dan kekerasan yang tidak masuk akal mencemari dunia manusia. Sebaliknya, alam dewa kematian adalah sarang perjudian yang membosankan dan tidak berubah. Pelajar Jepang berusia 17 tahun yang cerdik, Light Yagami, dan dewa kematian Ryuk yang sadis berbagi satu keyakinan : dunia mereka busuk. Untuk hiburannya sendiri, Ryuk menjatuhkan Death Note miliknya ke dunia manusia.</p><p class="indents">Light tersandung padanya, menganggap aturan pertamanya konyol : manusia yang namanya tertulis di catatan ini akan mati. Namun, godaannya terlalu besar, dan Light bereksperimen dengan menulis nama penjahat, yang secara mengganggu melakukan pembunuhan pertamanya.</p><p class="indents">Sadar akan kekuatan dewa mengerikan yang telah jatuh ke tangannya, Light - di bawah alias Kira - mengikuti rasa keadilannya yang jahat dengan tujuan akhir membersihkan dunia dari semua pelaku kejahatan. Detektif dalang yang teliti, L, sudah mengikuti jejaknya, tetapi karena kecemerlangan Light menyaingi L, pengejaran besar untuk Kira berubah menjadi pertarungan kecerdasan yang intens yang hanya bisa berakhir ketika salah satu dari mereka mati.</p>'
        ]);
        
        DaftarAnime::create ([
            'title' => 'DR.STONE',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'dr-stone',
            'genre' => 'Comedy, Sci-Fi, Survival, Time Travel, Shounen',
            'excerpt' => 'Setelah lima tahun memendam perasaan tak terucapkan, siswa sekolah menengah Taiju Ooki akhirnya siap menyatakan cintanya kepada Yuzuriha Ogawa. Namun, tepat ketika Taiju memulai pengakuannya, cahaya hijau yang menyilaukan menghantam Bumi dan membatu umat manusia di seluruh dunia - mengubah setiap manusia menjadi batu.',
            'body' => '<p class="indents">Setelah lima tahun memendam perasaan tak terucapkan, siswa sekolah menengah Taiju Ooki akhirnya siap menyatakan cintanya kepada Yuzuriha Ogawa. Namun, tepat ketika Taiju memulai pengakuannya, cahaya hijau yang menyilaukan menghantam Bumi dan membatu umat manusia di seluruh dunia - mengubah setiap manusia menjadi batu.</p><p class="indents">Beberapa milenium kemudian, Taiju terbangun untuk menemukan dunia modern sama sekali tidak ada, karena alam telah berkembang selama bertahun - tahun umat manusia diam. Di antara patung-patung dunia batu, Taiju bertemu dengan manusia hidup lainnya : temannya yang mencintai sains, Senkuu, yang telah aktif selama beberapa bulan. Taiju mengetahui bahwa Senkuu telah mengembangkan skema besaruntuk meluncurkan kebangkitan penuh peradaban dengan sains. Otot Taiju dan otak Senkuu bergabung untuk menjalin kemitraan yang hebat, dan mereka segera menemukan metode untuk menghidupkan kembali mereka yang membatu.</p><p class="indents">Namun, rencana induk Senkuu terancam saat ideologinya ditantang oleh mereka yang terbangun. Sementara itu, alasan membatu umat manusia masih belum diketahui.</p>'
        ]);
    }
}
