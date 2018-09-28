<?php namespace Source\Repository;

/* 
 * This is the class containing the API queries for my website
 * 
 * @author Craig Hutcheon
 */

class CockpitAPIQueries
{
    function postForm($form)
    {
        $service_url = 'https://craig-hutcheon.uk/cockpit-master/api/forms/submit/contact_me?token=cf559d37fcff160b827e63fc24f7d0';
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($curl, CURLOPT_POSTFIELDS, $form);                                                                  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($form))                                                                       
        );
        $result = curl_exec($curl);
        
        return $result;
    }
}