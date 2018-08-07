<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RssToDB extends Controller
{
    private $rsi;
    private $feed_data;

    public function __construct()
    {
        $this->rsi = '';
        $this->feed_data = [];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $rsi_url = 'https://robertsspaceindustries.com/comm-link/rss';
        $inn_url = 'http://imperialnews.network/category/blog/feed/';
        $this->rsi = \Feed::loadRss($inn_url);

        dd($this->rsi);

        $this->feed_data = [
            'feed_title' => $this->rsi->title,
            'feed_link' => $this->rsi->link,
            'feed_date' => $this->rsi->pubDate,
        ];

        foreach($this->rsi->item as $post){

            $this->feed_data['post_title'] = $post->title;
            $this->feed_data['post_date'] = $post->pubDate;
            //$this->feed_data['post_content'] = $post->;
            $this->feed_data['post_link'] = $post->link;
        }

        dd($this->feed_data);
    }
}
