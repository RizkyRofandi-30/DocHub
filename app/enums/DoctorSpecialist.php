<?php

namespace App\Enums;

enum DoctorSpecialist: string
{
    case Dokter_Umum = 'Dokter Umum';
    case Dokter_Anak = 'Dokter Anak';
    case Dokter_Kandungan = 'Dokter Kandungan';
    case Dokter_Gigi = 'Dokter Gigi';
}
