<?php
class Blog_model
{
    private $blog = [
    [
        "penulis"=> "Guru RPL",
        "judul"=> "Mengajar PHP MVC",
        "tulisan"=> "Models"
    ],
    [
        "penulis"=> "Guru RPL",
        "judul"=> "Mengajar PHP MVC",
        "tulisan"=> "View"
    ],
    [
        "penulis"=> "Guru RPL",
        "judul"=> "Mengajar PHP MVC",
        "tulisan"=> "Controller"
    ]
    ];
    public function getAllBlog()
    {
        return $this->blog;
    }
}