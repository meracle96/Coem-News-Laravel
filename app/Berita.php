<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
		protected $fillable = ['kategori_id', 'judul', 'isi', 'foto'];
		
		public function user()
		{
			return $this->belongsTo(User::class);
		}

		public function kategori()
		{
			return $this->belongsTo(Kategori::class);
		}
}
