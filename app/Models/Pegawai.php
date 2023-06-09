<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Pegawai as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Pegawai extends Model //Definisi Model
{
 protected $table="pegawai"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
 public $timestamps= false; 
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = [
    'nip',
    'nama',
    'alamat',
    'jabatan',
    'gaji_pokok',
 ];
};