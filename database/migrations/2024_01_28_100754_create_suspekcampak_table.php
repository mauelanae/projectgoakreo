<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suspekcampak', function (Blueprint $table) {
            $table->id();
            $table->string('noepid');
            $table->enum('puskesmas', ['BANDAHARJO','BANGETAYU','BUGANGAN','BULU LOR','CANDILAMA','GAYAMSARI',
            'GENUK','GUNUNGPATI','HALMAHERA','KAGOK','KARANG ANYAR','KARANG AYU',
            'KARANG DORO','KARANG MALANG','KEDUNGMUNDU','KROBOKAN','LAMPER TENGAH','LEBDOSARI',
            'MANGKANG','MANYARAN','MIJEN','MIROTO','NGALIYAN','NGEMPLAK SIMONGAN',
            'NGESREP','PADANGSARI','PANDANARAN','PEGANDAN','PONCOL','PUDAK PAYUNG',
            'PURWOYOSO','ROWOSARI','SEKARAN','SRONDOL','TAMBAKAJI','TLOGOSARI KULON','TLOGOSARI WETAN','PLAMONGANSARI',
            'RSUP Dr. KARIADI','RSUD TUGUREJO','RSUD K.R.M.T WONGSONEGORO','RS TELOGOREJO SEMARANG','RS. ST. ELISABETH SEMARANGRS',
            'RSI SULTAN AGUNG SEMARANG','RS COLUMBIA ASIA SEMARANG','RS ROEMANI MUHAMMADIYAH','RS PANTI WILASA CITARUM','RS PANTI WILASA DR. CIPTO',
            'RS BHAKTI  WIRA TAMTAMA','RS BHAYANGKARA SEMARANG','RS HERMINA PANDANARAN','RS HERMINA BANYUMANIK','RS PERMATA MEDIKA',
            'RS NASIONAL DIPONEGORO','RSU  WILLIAM BOOTH','RS BANYUMANIK','RSU  BHAYANGKARA AKPOL','RS SILOAM SEMARANG',
            'RSJD Dr. AMINO GONDOHUTOMO','RSIA PLAMONGAN INDAH','RSIA GUNUNG SAWO','RSIA KUSUMA PRADJA','RSIA BUNDA',
            'RSIA ANANDA PASAR ACE','RSIA ANUGERAH','RSI GIGI DAN MULUT SULTAN AGUNG','RS GIGI DAN MULUT UNIMUS','RS MATA JEC CANDI SEMARANG',
            'RS BANYUMANIK 2','RS KELUARGA SEHAT III SEMARANG']);
            $table->date('tanggalterimalaporan');
            $table->date('tanggalpe');
            $table->string('nik');
            $table->string('namakasus');
            $table->enum('jeniskelamin',['Laki-Laki','Perempuan']);
            $table->date('tanggallahir');
            $table->text('alamat');
            $table->enum('kelurahan', ['BAMBANKEREP','BANDARHARJO','BANGETAYU KULON','BANGETAYU WETAN','BANGUNHARJO',
            'BANJARDOWO','BANYUMANIK','BARUSARI','BENDAN DUWUR','BENDAN NGISOR',
            'BENDUNGAN','BOJONG SALAMAN','BONGSARI','BRINGIN','BRUMBUNGAN',
            'BUBAKAN','BUGANGAN','BULU LOR','BULUSAN','BULUSTALAN',
            'CABEAN','CANDI','CANGKRIAN','CEPOKO','DADAPSARI',
            'GABAHAN','GABANGSARI','GAJAHMUNGKUR','GAYAMSARI','GEDAWANG',
            'GEMAH','GENUKSARI','GISIKDRONO','GONDORIYO','GUNUNGPATI',
            'JABUNGAN','JAGALAN','JANGLI','JATIBARANG','JATINGALEH',
            'JATIREJO','JATISARI','JOMBLANG','JRAKAH','KALIBANTENG KIDUL',
            'KALIBANTENG KULON','KALICARI','KALIGAWE','KALIPANCUR','KALISEGORO',
            'KALIWIRU','KANDRI','KARANG KIDUL','KARANGANAR','KARANGANYAR GUNUNG',
            'KARANGAYU','KARANGMALANG','KARANGREJO','KARANGROTO','KARANGTEMPEL',
            'KARANGTURI','KAUMAN','KEBONAGUNG','KEDUNGMUNDU','KEDUNGPANE',
            'KEMBANGARUM','KEMBANGSARI','KEMIJEN','KRAMAS','KRANGGAN',
            'KRAPYAK','KROBOKAN','KUDU','KUNINGAN','LAMPER KIDUL',
            'LAMPER LOR','LAMPER TENGAH','LEMPONGSARI','MANGKANG KULON','MANGKANG WETAN',
            'MANGUHARJO (Tembalang)','MANGUHARJO (Tugu)','MANGUNSARI','MANYARAN','METESEH',
            'MIJEN','MIROTO','MLATIBARU','MLATIHARJO','MUGASSARI',
            'MUKTIHARJO KIDUL','MUKTIHARJO LOR','NGADIRGO','NGALIYAN','NGEMPLAK SIMONGAN',
            'NGESREP','NGIJO','NONGKOSAWIT','PADANGSARI','PAKITELAN',
            'PALEBON','PANDANSARI','PANDEAN LAMPER',
            'PANGGUNG KIDUL','PANGGUNG LOR','PATEMON','PEDALANGAN','PEDURUNGAN KIDUL',
            'PEDURUNGAN LOR','PEDURUNGAN TENGAH','PEKUDEN','PENGGARON KIDUL','PENGGARON LOR',
            'PESANTREN','PETERONGAN','PETOMPON','PINDRIKAN KIDUL','PINDRIKAN LOR',
            'PLALANGAN','PLAMONGANSARI','PLEBURAN','PLOMBOKAN','PODOREJO',
            'POLAMAN','PONGANGAN','PUNDAK PAYUNG','PURWODINATAN','PURWOSARI (Mijen)',
            'PURWOSARI (SMG Utara)','PURWOYOSO','RANDUGARUT','RANDUSARI','REJOMULYO',
            'REJOSARI','ROWOSARI','SADENG','SALAMANMLOYO','SAMBIREJO',
            'SAMPANGAN','SARIREJO','SAWAH BESAR','SEKARAN','SEKAYU',
            'SEMBUNGHARJO','SENDANGGUWO','SENDANGMULYO','SIWALAN','SRONDOL KULON',
            'SRONDOL WETAN','SUKOREJO','SUMURBOTO','SUMUREJO','TAMBAKAJI',
            'TAMBAKHARJO','TAMBAKREJO','TEMBANGAN','TANDANG','TANJUNGMAS',
            'TAWANG MAS','TAWANG SARI','TEGALSARI','TEMBALANG','TERBOYO KULON',
            'TERBOYO WETAN','TINJOMOYO','TLOGOMULYO','TLOGOSARI KULON','TLOGOSARI WETAN',
            'TRIMULYO','TUGUREJO','WATES','WONODRI','WONOLOPO','WONOPLOMBON',
            'WONOSARI','WONOTINGAL']);
            $table->enum('kecamatan', ['BANYUMANIK','CANDISARI','GAJAHMUNGKUR','GAYAMSARI','GENUK',
            'GUNUNGPATI','MIJEN','NGALIYAN','PEDURUNGAN','SEMARANG BARAT',
            'SEMARANG SELATAN','SEMARANG TENGAH','SEMARANG TIMUR','SEMARANG UTARA','TEMBALANG',
            'TUGU']);
            $table->string('namaorangtua');
            $table->date('tanggalmulaidemam');
            $table->date('tanggalmulairash');
            $table->enum('riwayatvaksin',['Imunisasi campak (MR) usia 9 bulan','Imunisasi campak (MR) usia 18 bulan','Imunisasi campak (MR) saat kelas 1 SD']);
            $table->enum('pernahimunisasiMMR',['Iya','Tidak']);
            $table->date('tanggalvaksinMRterakhir');
            $table->enum('pemberianvitA',['Iya','Tidak']);
            $table->enum('apakahbepergian',['Iya','Tidak']);
            $table->enum('apakahambildarah',['Iya','Tidak']);
            $table->date('tanggalambildarah')->nullable();
            $table->enum('apakahtesurin',['Iya','Tidak']);
            $table->date('tanggalambilurin')->nullable();
            $table->date('tanggalpengirimankelab');
            $table->enum('keadaansaatini',['Hidup','Meninggal','Lost to follow-up']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suspekcampak');
    }
};