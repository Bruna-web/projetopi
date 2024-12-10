<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    // Definir os campos que podem ser preenchidos (para evitar mass-assignment)
    protected $fillable = [
        'especialidade', 'medico', 'data', 'hora', 'nome', 'cpf', 'telefone',
    ];
}
