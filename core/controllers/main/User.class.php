<?php
/**
 * Created by PhpStorm.
 * User: janhendrik
 * Date: 5-9-18
 * Time: 19:46
 */

namespace WIPCMS\core\controllers\main;


use WIPCMS\core\common\Controller;
use WIPCMS\core\database\ORM;

class User extends Controller {
    public function show() {
        $repo = ORM::getInstance()->getEntityManager()->getRepository('User');
        $users = $repo->findAll();
        //ORM::dump($users);
        ?>
        <table>
            <tr>
                <td>Name</td>
                <td>E-mail</td>
                <td>Created At</td>
                <td>Last Session</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <pre>
        <?php
        foreach ($users as $user) {
            ORM::dump($user);
            var_dump($user->getCreatedAt());
            var_dump($user->getCreatedAt()->date);
            die;
            ?>
            </pre>
                <tr>
                    <td><?php echo $user->getName(); ?></td>
                    <td><?php echo $user->getEmail(); ?></td>
                    <td><?php echo $user->getCreatedAt(); ?></td>
                    <td><?php echo $user->getLastSession(); ?></td>
                    <td><button type=\"button\" class=\"btn btn-primary\">Edit</button></td>
                    <td><button type=\"button\" class=\"btn btn-danger\">Delete</button></td>
                </tr>
            <?php
        }
    }
}