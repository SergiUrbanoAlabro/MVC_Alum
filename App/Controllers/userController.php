<?php


class userController extends Controller
{

    public function index()
    {
        $userModel = new User();

        $users = $userModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($users)) {
                foreach ($users as $user) {
                    if ($user['nom_user'] === $_POST['nom_user']) {
                        if ($user['password_user'] === $_POST['password_user']) {
                            header('Location: /');
                            exit;
                        } else {
                            echo 'Contrassenya Incorrecte';
                        }
                    } else {
                        echo 'L\'usuari no existeix';
                    }
                }
            } else {
                echo 'Encara no hi han usuaris a la pàgina';
            }
        }


        $params['title'] = 'Login';

        $this->render('auth/login', $params, 'main');
    }

    public function register()
    {

        $userModel = new User();

        $params['title'] = 'Register';

        $this->render('auth/register', $params, 'main');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idUser = $_SESSION['user_id']++;
            $nomUser = $_POST['nom_user'];
            $correuUser = $_POST['correu_user'];
            $passwordUser = $_POST['password_user'];
            $rolUser = 'alumne';

            $user = array(
                'id' => $idUser,
                'nom_user' => $nomUser,
                'correu_user' => $correuUser,
                'password_user' => $passwordUser,
                'rol' => $rolUser
            );

            $userModel->create($user);
            $this->index();
        }
    }

    public function logout() {}
}
