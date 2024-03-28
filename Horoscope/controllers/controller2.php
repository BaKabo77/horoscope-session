<?php


switch( $action )
 {
   case 'reponse':
 {

    $choix = $_POST['horoscope'];

    $reponse = getLeSigne($choix);

     echo $reponse['horoscope'];

        break;
    }
    
    case 'connexion':
 {
        $cnx = $_REQUEST[ 'cnx' ];
        $mdp = $_REQUEST[ 'mdp' ];

        $_SESSION['user'] = getUser($cnx,$mdp);
        var_dump($_SESSION);

        $verif =getConexion( $cnx, $mdp );
    

        if( $verif['nb'] > 0 ) {
                        $signe = getLesSignes();
                    
                        foreach($signe as $k){
                            $tableau[$k['signe']] = $k['horoscope']; 
                        }

                        $status =getStatus($cnx,$mdp);

                        include 'views/choix.php';
                        break;
                    } else {
                        include 'views/connexion.php';
        }

        break;
    }

    case 'modifier':
 {
    
    $signe = getLesSignes();
    foreach ($signe as $k)
        {
            $tableau[$k['signe'] ] = $k['horoscope'];
        }
        include 'admin.php';
        break;
    }

    case 'administrer':
 {

    $reponse =getLesSignes();
    foreach ( $reponse as $cle => $valeur )
 {
            $connexion[ $cle ] = $valeur;
        }

    } 

    default:
 {
        include 'views/connexion.php';

    }
}
