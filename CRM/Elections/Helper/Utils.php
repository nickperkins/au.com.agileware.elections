<?php

class CRM_Elections_Helper_Utils
{

  public static function replaceSingleProfilePic(&$contact, $imageKey, $contactIdKey)
  {
    $profilePics = self::getCMSProfilePictures(array($contact[$contactIdKey]));
    $contact[$imageKey] = $profilePics[$contact[$contactIdKey]];
  }

  public static function getCMSProfilePictures($contactIds)
  {
    $profilePictures = array();
    if (count($contactIds) == 0) {
      return $profilePictures;
    }

    $cmsMatches = civicrm_api3('Contact', 'get', [
      'sequential' => 1,
      'return' => ["id", "image_URL"],
      'id' => ['IN' => $contactIds],
      'options' => ['limit' => 0],
    ]);

    $cmsMatches = $cmsMatches["values"];


    $defaultImage = Civi::resources()->getUrl('au.com.agileware.elections', 'images/default_profile.jpg');
    
    foreach ($cmsMatches as $cmsMatch) {
      $profilePictures[$cmsMatch['contact_id']] = $cmsMatch['image_URL'] !== "" ? $cmsMatch['image_URL'] : $defaultImage;
    }

    return $profilePictures;
  }
}
