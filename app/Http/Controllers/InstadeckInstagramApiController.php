<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class InstadeckInstagramApiController extends Controller
{
    public function index()
    {
        $appId = config('services.instagram.client_id');
        $redirectUri = urlencode(config('services.instagram.redirect_uri'));
        return redirect()->to("https://api.instagram.com/oauth/authorize?app_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
    }

    public function callback(Request $request)
    {
        $code = $request->code;
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

        $appId = config('services.instagram.client_id');
        $secret = config('services.instagram.client_secret');
        $redirectUri = config('services.instagram.redirect_uri');

        $client = new Client();

        $response = $client->request('POST', 'https://api.instagram.com/oauth/access_token', [
            'form_params' => [
                'app_id' => $appId,
                'app_secret' => $secret,
                'grant_type' => 'authorization_code',
                'redirect_uri' => $redirectUri,
                'code' => $code,
            ];
        ]);

        if ($response->getStatusCode() != 200) {
            return redirect()->route('home')->with('error', 'Unauthorized login to Instagram.');
        }

        $content = $response->getBody()->getContents();
        $instagram = json_decode($content);

        $accessToken = $instagram->access_token;
        $userId = $instagram->user_id;

        $getProfile = $client->request('GET', "https://graph.instagram.com/me?fields=id,ig_id,profile_picture_url,username,media_count,followers_count,follows_count,name,biography,website&access_token={$accessToken}");
        $profileData = $getProfile->getBody()->getContents();
        $profile = json_decode($profileData);

        $getMedia = $client->request('GET', "https://graph.instagram.com/me/media?fields=id,ig_id,thumbnail_url,username,media_type,media_url,caption,permalink,timestamp&access_token={$accessToken}");
        $mediaData = $getMedia->getBody()->getContents();
        $media = json_decode($mediaData);

        return view('/instadeck/profile', compact('profile', 'media'));
    }
}