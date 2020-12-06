<?php



namespace PHPMailer\PHPMailer;

class Exception extends \Exception
{
    /**
     * mensagem de erro
     *
     * @return string
     */
    public function errorMessage()
    {
        return '<strong>' . htmlspecialchars($this->getMessage()) . "</strong><br />\n";
    }
}
