<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VideoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

        public function download(Request $request)
        {
        $url = $request->input('url');
        $videoUrl = $this->getVideoUrl($url);

        if ($videoUrl) {
            return response()->streamDownload(function () use ($videoUrl) {
                echo file_get_contents($videoUrl);
            }, 'video.mp4');
        }

        return back()->withErrors('Não foi possível encontrar o vídeo.');
        }

        private function getVideoUrl($instagramUrl)
        {
        $client = new Client();
        $response = $client->get($instagramUrl);
        $html = $response->getBody()->getContents();

        if (preg_match('/"video_url":"([^"]+)"/', $html, $matches)) {
            return stripslashes($matches[1]);
        }

        return null;
        }

}
