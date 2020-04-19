<?php
namespace foysal68\Facebook\Library;

class Facebook{
    private $fbId;
    private $fbSecret;
    private $fbUrl;

    public function __construct($fb){

        $this->fbId = $fb['id'];
        $this->fbSecret = $fb['secret'];
        $this->fbUrl = $fb['url'];
    }

    public function getCreds()
    {
        return [
            'fb_id' => $this->fbId,
            'fb_secret' => $this->fbSecret,
            'fb_url' => $this->fbUrl
        ];
    }
}