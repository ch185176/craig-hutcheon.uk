<?php namespace Source\Repository;

class ContentRepository
{
    function retrieveHeader($page)
    {
        $service_url = 'https://craig-hutcheon.uk/cockpit-master/api/collections/get/header?token=cf559d37fcff160b827e63fc24f7d0';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'method' => 'post',
            'filter[page]' => $page,
            'populate' => 1,
            );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($curl_response);
        return $response->entries;
    }
    
    function retrieveHomePage()
    {
        $service_url = 'https://craig-hutcheon.uk/cockpit-master/api/singletons/get/home?token=cf559d37fcff160b827e63fc24f7d0';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'method' => 'post',
            'populate' => 1,
            );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($curl_response);
        return $response;
    }
    
    function retrieveCVPage()
    {
        $service_url = 'https://craig-hutcheon.uk/cockpit-master/api/singletons/get/cv?token=cf559d37fcff160b827e63fc24f7d0';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'method' => 'post',
            'populate' => 1,
            );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($curl_response);
        return $response;
    }
    
    function retrieveMyWork()
    {
        $service_url = 'https://craig-hutcheon.uk/cockpit-master/api/singletons/get/my_work?token=cf559d37fcff160b827e63fc24f7d0';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'method' => 'post',
            'populate' => 1,
            );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($curl_response);
        return $response;
    }
    
    function retrieveArticles(){
        $service_url = 'https://craig-hutcheon.uk/cockpit-master/api/collections/get/project_article?token=cf559d37fcff160b827e63fc24f7d0';
        $curl = curl_init($service_url);
        $curl_post_data = array(
            'method' => 'post',
            'populate' => 1,
            );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($curl_response);
        return $response->entries;
    }
}

