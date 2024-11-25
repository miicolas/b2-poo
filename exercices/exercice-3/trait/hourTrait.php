<?php

trait hourTrait {
    public function afficherHeure($className, $message): void
    {
        $date = new DateTime();
        if ($className === 'Humain') {
            echo '<p>'. $message .' à '. $date->format('H:i:s') .'</p>';
        } else {
            echo '<p>'. $message .' à '. $date->getTimestamp() .'</p>';
        }
    }
}

?>