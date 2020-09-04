<?php

namespace App\Console\Commands;

use App\Homepage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class renameImg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rename:img';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Renomme les images en préfixant le nom (slug) du site';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $hp_imgs = Storage::disk("img")->files('home');
        foreach($hp_imgs as $img){
            echo $img." => ".'home/'.env("IMG_SLUG")."_".basename($img)."  \n";
            Storage::disk("img")->copy($img, 'home/'.env("IMG_SLUG")."_".basename($img));
        }

        $conseil_imgs = Storage::disk("img")->files('conseil');
        foreach($conseil_imgs as $img){
            echo $img." => ".'conseil/'.env("IMG_SLUG")."_".basename($img)."  \n";
            Storage::disk("img")->copy($img, 'conseil/'.env("IMG_SLUG")."_".basename($img));
        }
        //print_r(Storage::disk("img")->copy('home/HP_aero.jpg', 'home/HP_aero2.jpg'));
    }
}
