<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Analytic;

class AnalyticSeeder extends Seeder
{
  public function run()
  {
    Analytic::factory(10)->create();
  }
}
