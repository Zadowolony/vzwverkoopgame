<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\WishListController;

class CheckWishlistGames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-wishlist-games';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        app(WishListController::class)->checkWishlistItems();
    $this->info('Checked wishlist items and sent notifications.');
    }
}