<?php

require_once 'C:/WebServers/home/localhost/myBlog/diem/dmCorePlugin/lib/core/dm.php';
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      // add plugins you want to enable here
    ));

    $this->setWebDir(sfConfig::get('sf_root_dir').'/web');
  }
  
}