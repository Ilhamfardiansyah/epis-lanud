<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiyalemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siyalems', function (Blueprint $table) {
            $table->id();
            $table->enum('lembaga',array('Kuat','Tegak','Lampai','Lemah'));
            $table->enum('sikap',array('Tegak','Gagah','Bungkok','Kepal Tunduk Kaku'));
            $table->enum('langkah',array('Lenting','Tenang','Langkah Panjang','Langkah Pendek'));
            $table->enum('bangun kepala',array('Sebagai Pangkal','Belah Ketupat','Bulat','Jorong','Lonjong','Panjang'));
            $table->enum('rambut',array('Lebat/Jarang','Berombak/Kejur','Kejur/keriting','Tegak'));
            $table->enum('kening',array('Rata','Miring','KeAtas/KeBawah'));
            $table->enum('dahi',array('Loncos Ke Belakang/Lurus Kebawah','Cenderung ke belakang'));
            $table->enum('hidung',array('Pangkalnya Rata','Batangnya:Membentuk kedalam/keluar lurus, alasnya menuju ke atas'));
            $table->enum('bibir',array('Tebal','Tipis','Sumbing'));
            $table->enum('telinga',array('Bulat bujur tiga penjuru dari belakang','Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang'));
            $table->enum('urusan polisi militer',array('Pernah','Tidak Pernah'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siyalems');
    }
}
