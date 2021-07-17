<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class InstadeckInstagramApiController extends Controller
{
    $appId = config('services.facebook.client_id');
    $redirectUri = config('services.facebook.redirect_uri');
    $secret = config('services.facebook.client_secret');

    public function index()
    {
        return redirect()->to("https://www.facebook.com/v8.0/dialog/oauth?client_id={$appId}&redirect_uri={$redirectUri}&scope=instagram_basic,instagram_manage_insights,ads_management,business_management,pages_show_list,pages_read_engagement");
    }

    public function callback(Request $request)
    {
        $client = new Client();
        $code = $request->code;
        
        if (empty($code)) return redirect()->route('instadeck.home')->with('error', 'Failed to login with Instagram.');

        try {
            $response = $client->request('GET', "https://graph.facebook.com/v8.0/oauth/access_token?client_id={$appId}&client_secret={$secret}&redirect_uri={$redirectUri}&code={$code}");
        } catch (RequestException $e) {
            return redirect()->route('instadeck.home');
        }
        
        if ($response->getStatusCode() != 200) {
            return redirect()->route('instadeck.home')->with('error', 'Unauthorized login to Instagram.');
        }
        
        $content = $response->getBody()->getContents();
        $token = json_decode($content);
        
        $instaId = config('services.facebook.instagram_id');
        $accessToken = $token->access_token;

        $getProfile = $client->request('GET', "https://graph.facebook.com/v8.0/{$instaId}?fields=id,ig_id,profile_picture_url,username,media_count,followers_count,follows_count,name,biography,website&access_token={$accessToken}");
        $profileData = $getProfile->getBody()->getContents();
        $profile = json_decode($profileData);

        $getMedia = $client->request('GET', "https://graph.facebook.com/v8.0/{$instaId}/media?fields=id,media_type,media_url,children{id,media_type,media_url},username,like_count,comments_count,caption,timestamp,permalink&access_token={$accessToken}");
        $mediaData = $getMedia->getBody()->getContents();
        $media = json_decode($mediaData, true);

        return view('/instadeck/profile', compact('profile', 'media'));
    }
}