<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class InstadeckInstagramApiController extends Controller
{
    const
        $appId = config('services.facebook.client_id'),
        $secret = config('services.facebook.client_secret'),
        $redirectUri = config('services.facebook.redirect_uri'),
        $instaId = config('services.facebook.instagram_id');

    public function index()
    {
        return redirect()->to("https://www.facebook.com/v8.0/dialog/oauth?client_id={$appId}&redirect_uri={$redirectUri}&scope=pages_read_engagement,instagram_basic,ads_management,business_management,pages_show_list");
    }

    public function callback(Request $request)
    {
        $code = $request->code;
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

        $client = new Client();

        $response = $client->request('GET', "https://graph.facebook.com/v8.0/oauth/access_token?client_id={$appId}&client_secret={$secret}&redirect_uri={$redirectUri}&code={$code}");

        if ($response->getStatusCode() != 200) {
            return redirect()->route('home')->with('error', 'Unauthorized login to Instagram.');
        }

        $content = $response->getBody()->getContents();
        $token = json_decode($content);

        dd($token);

        $accessToken = $token->access_token;
        $userId = $token->user_id;

        $getProfile = $client->request('GET', "https://graph.facebook.com/v8.0/{$InstaId}?fields=id,ig_id,profile_picture_url,username,media_count,followers_count,follows_count,name,biography,website&access_token={$accessToken}");
        $profileData = $getProfile->getBody()->getContents();
        $profile = json_decode($profileData);

        $getMedia = $client->request('GET', "https://graph.facebook.com/v8.0/{$InstaId}/media?access_token={$accessToken}");
        $mediaData = $getMedia->getBody()->getContents();
        $media = json_decode($mediaData);

        return view('/instadeck/profile', compact('profile', 'media'));
    }
}