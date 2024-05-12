<?php

namespace App\Mail;

use App\Models\Game;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class GameAvailableMail extends Mailable
{
    use Queueable, SerializesModels;

    //titel van het spel
    public $game;

    /**
     * Create a new message instance.
     */
    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Game Available Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->subject('Game Now Available!')
                    ->view('emails.gameAvailable')
                    ->with([
                        'gameTitle' => $this->game->titel,
                        'gamePrice' => $this->game->userGames->first()->prijs, // Veronderstelt dat 'userGames' de prijsinformatie bevat
                        'gameDescription' => $this->game->beschrijving
                    ]);
    }
}