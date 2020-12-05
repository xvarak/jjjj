<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

    public function actionDefault();
    
    $pin1=new \models \UtilsJosefVarak();
    ECHO $pin1->getPINJosefVarak();
    ECHO '<br>';
      ECHO $pin1->getPINJosefVarak();
    ECHO '<br>';
      ECHO $pin1->getPINJosefVarak();
    ECHO '<br>';
      ECHO $pin1->getPINJosefVarak();
    ECHO '<br>';
      ECHO $pin1->getPINJosefVarak();
    ECHO '<br>';
    
    
    
    
    
    
    
    
    
}
