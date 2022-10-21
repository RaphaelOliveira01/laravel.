<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\models\Produto;
class NovaProdutoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $produto;
    public $preco;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Produto $produto)
    {
        $this->produto = $produto->produto;
        $this->preco = $produto->preco;
        $this->url = 'http://localhost:8000/produto/'.$produto->id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.novo-produto')->subject('Novo Produto criada');
    }
}
